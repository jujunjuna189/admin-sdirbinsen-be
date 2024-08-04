<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatKeluarga extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'riwayat_keluarga';

    protected $fillable = [
        'personil_id',
        'alamat_tinggal',
        'nomor_hp',
        'nama_ayah',
        'nama_ibu',
        'alamat_orang_tua',
        'nama_istri_atau_suami',
        'status',
        'jumlah_anak'
    ];

    // Define the relationship with the 'personil' table
    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }

    public function keluargaAnak()
    {
        return $this->hasMany(AnakRiwayatKeluarga::class, 'riwayat_keluarga_id', 'id');
    }
}
