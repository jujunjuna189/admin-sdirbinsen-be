<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanPrestasi extends Model
{
    use HasFactory;

    protected $table = 'satuan_prestasi';

    protected $fillable = [
        'satuan_id',
        'title',
        'gambar',
        'deskripsi',
    ];
}
