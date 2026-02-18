<?php

namespace App\Traits;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    /**
     * Log aktivitas create
     */
    protected function logCreate($modelName, $itemName)
    {
        $this->createNotification('create', $modelName, $itemName, 'menambahkan', null);
    }

    /**
     * Log aktivitas update dengan deteksi field yang berubah
     * $changedFields adalah array field yang berubah
     */
    protected function logUpdate($modelName, $itemName, $changedFields = null)
    {
        // Jika changedFields adalah string, ubah jadi array
        if (is_string($changedFields)) {
            $changedFields = [$changedFields];
        }
        
        // Jika ada field yang berubah, ambil yang pertama untuk ditampilkan
        $editedField = is_array($changedFields) && count($changedFields) > 0 ? $changedFields[0] : null;
        
        $this->createNotification('update', $modelName, $itemName, 'mengupdate', $editedField);
    }

    /**
     * Log aktivitas delete
     */
    protected function logDelete($modelName, $itemName)
    {
        $this->createNotification('delete', $modelName, $itemName, 'menghapus', null);
    }

    /**
     * Deteksi field yang berubah dari request
     */
    protected function detectChangedFields($model, $request)
    {
        $changed = [];
        $fillable = $model->getFillable();
        
        foreach ($fillable as $field) {
            if ($request->has($field)) {
                $oldValue = $model->getOriginal($field);
                $newValue = $request->input($field);
                
                // Cek jika nilai berubah
                if ($oldValue != $newValue) {
                    $changed[] = $this->translateFieldName($field);
                }
            }
        }
        
        // Cek jika ada file upload (photo/image)
        if ($request->hasFile('photo')) {
            $changed[] = 'photo';
        }
        if ($request->hasFile('image')) {
            $changed[] = 'image';
        }
        if ($request->hasFile('thumbnail')) {
            $changed[] = 'thumbnail';
        }
        
        return $changed;
    }

    /**
     * Translate field name ke bahasa yang lebih readable
     */
    private function translateFieldName($field)
    {
        $translations = [
            'name' => 'nama',
            'title' => 'judul',
            'category' => 'kategori',
            'categories' => 'kategori',
            'mode' => 'mode',
            'level' => 'level',
            'teacher' => 'teacher',
            'institusi' => 'institusi',
            'photo' => 'photo',
            'image' => 'image',
            'thumbnail' => 'thumbnail',
            'tujuan_program' => 'tujuan program',
            'fokus_pembelajaran' => 'fokus pembelajaran',
            'manfaat_program' => 'manfaat program',
            'hashtags' => 'hashtags',
            'content' => 'konten',
        ];
        
        return $translations[$field] ?? $field;
    }

    /**
     * Buat notifikasi
     */
    private function createNotification($action, $modelName, $itemName, $actionText, $editedField = null)
    {
        $user = Auth::user();
        
        // Translate model name ke bahasa Indonesia
        $modelTranslations = [
            'Program' => 'program',
            'Teacher' => 'teacher',
            'Article' => 'artikel',
            'Testimonial' => 'testimonial',
        ];

        $translatedModel = $modelTranslations[$modelName] ?? strtolower($modelName);
        
        // Format pesan berdasarkan action
        if ($action === 'update' && $editedField) {
            // Format khusus untuk update dengan field yang diedit
            $message = "telah berhasil {$actionText} {$editedField} {$translatedModel} {$itemName}";
        } else {
            // Format standar tanpa kurung
            $message = "telah berhasil {$actionText} {$translatedModel} {$itemName}";
        }

        Notification::create([
            'user_id' => $user->id,
            'action' => $action,
            'model' => $modelName,
            'model_name' => $itemName,
            'message' => $message,
            'is_read' => false
        ]);
    }
}
