<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendidikanUmum extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pendidikan_umum';

    protected $fillable = [
        'personil_id',
        'jenis_pendidikan',
        'tahun',
        'nama_pendidikan',
        'prestasi',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
