<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'personil_id',
        'nama_kegiatan',
        'tahun',
        'tempat',
        'deskripsi',
        'kep_piagam'
    ];
}
