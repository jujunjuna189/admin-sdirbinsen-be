<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Satuan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'satuan';

    protected $fillable = [
        'nama',
        'logo',
        'sejarah',
        'sejarah_url',
        'hymne',
        'hymne_url',
        'hymne_lagu',
        'mars',
        'mars_url',
        'mars_lagu',
        'struktur_organisasi',
        'struktur_organisasi_url',
        'alamat',
        'latitude',
        'longitude',
        'status',
    ];
}
