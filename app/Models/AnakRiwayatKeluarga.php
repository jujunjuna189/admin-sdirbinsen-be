<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnakRiwayatKeluarga extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'anak_riwayat_keluarga';

    protected $fillable = [
        'riwayat_keluarga_id',
        'nama',
        'tanggal_lahir',
    ];

    // Define the relationship with the 'riwayat_keluarga' table
    public function riwayatKeluarga()
    {
        return $this->belongsTo(RiwayatKeluarga::class, 'riwayat_keluarga_id');
    }

    // Define the relationship with the 'anak_riwayat_keluarga' table
    public function anakRiwayatKeluarga()
    {
        return $this->hasMany(AnakRiwayatKeluarga::class, 'riwayat_keluarga_id');
    }
}
