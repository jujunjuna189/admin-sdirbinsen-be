<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPenugasanLuarNegeri extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'riwayat_penugasan_luar_negeri';

    protected $fillable = [
        'personil_id',
        'macam_tugas',
        'tahun',
        'negara',
        'prestasi',
        'status',
    ];

    // Define the relationship with the 'personil' table
    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
