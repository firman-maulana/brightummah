<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jenjang;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenjangs = [
            [
                'jenjang' => 'SD',
                'detailjenjang' => 'Sekolah Dasar',
                'kelas' => 'Kelas 1 - 6',
                'nama_program' => 'Program Pembelajaran Dasar Islami',
                'deskripsi' => 'Pembelajaran dasar dengan pendekatan Islami yang menyenangkan dan interaktif'
            ],
            [
                'jenjang' => 'SMP',
                'detailjenjang' => 'Sekolah Menengah Pertama',
                'kelas' => 'Kelas 7 - 9',
                'nama_program' => 'Program Pendalaman Akademik dan Karakter',
                'deskripsi' => 'Pendalaman materi dengan penguatan nilai-nilai Islam dan karakter'
            ],
            [
                'jenjang' => 'SMA',
                'detailjenjang' => 'Sekolah Menengah Atas',
                'kelas' => 'Kelas 10 - 12',
                'nama_program' => 'Program Persiapan Perguruan Tinggi',
                'deskripsi' => 'Persiapan universitas dengan pembekalan ilmu dan akhlak yang sempurna'
            ]
        ];

        foreach ($jenjangs as $jenjang) {
            jenjang::create($jenjang);
        }
    }
}