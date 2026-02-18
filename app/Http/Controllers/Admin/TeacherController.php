<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    use LogsActivity;
    public function index()
    {
        $teachers = Teacher::latest()->get();
        $teachersCount = $teachers->count();

        return view('admin.teachers.index', compact('teachers', 'teachersCount'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        if (Teacher::count() >= 4) {
            return redirect()->route('admin.teachers.index')->with('error', 'Maksimal 4 teacher. Hapus salah satu teacher untuk menambahkan yang baru.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'categories' => 'required|in:General Program,Islamic Integrated Program',
            'institusi' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('teachers', 'public');
        }

        $teacher = Teacher::create($validated);
        
        // Log activity
        $this->logCreate('Teacher', $teacher->name);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher berhasil ditambahkan.');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'categories' => 'required|in:General Program,Islamic Integrated Program',
            'institusi' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
            'remove_photo' => 'nullable|in:0,1',
        ]);
        
        // Deteksi field yang berubah sebelum update
        $changedFields = $this->detectChangedFields($teacher, $request);

        if (($validated['remove_photo'] ?? null) == '1') {
            if ($teacher->photo) {
                Storage::disk('public')->delete($teacher->photo);
            }
            $validated['photo'] = null;
        }

        if ($request->hasFile('photo')) {
            if ($teacher->photo) {
                Storage::disk('public')->delete($teacher->photo);
            }
            $validated['photo'] = $request->file('photo')->store('teachers', 'public');
        }

        unset($validated['remove_photo']);
        $teacher->update($validated);
        
        // Log activity dengan field yang berubah
        $this->logUpdate('Teacher', $teacher->name, $changedFields);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher berhasil diupdate.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacherName = $teacher->name;
        
        if ($teacher->photo) {
            Storage::disk('public')->delete($teacher->photo);
        }

        $teacher->delete();
        
        // Log activity
        $this->logDelete('Teacher', $teacherName);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher berhasil dihapus.');
    }

    public function bulkDestroy(Request $request)
    {
        $validated = $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer',
        ]);

        $teachers = Teacher::whereIn('id', $validated['ids'])->get();
        foreach ($teachers as $teacher) {
            if ($teacher->photo) {
                Storage::disk('public')->delete($teacher->photo);
            }
        }

        Teacher::whereIn('id', $validated['ids'])->delete();

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher terpilih berhasil dihapus.');
    }
}
