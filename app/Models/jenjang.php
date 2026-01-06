<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenjang extends Model
{
    protected $fillable = [
        'jenjang',
        'detailjenjang',
        'kelas',
        'nama_program',
        'deskripsi'
    ];
}