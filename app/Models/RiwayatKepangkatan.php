<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatKepangkatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'riwayat_kepangkatan';

    protected $fillable = [
        'personil_id',
        'pangkat',
        'tmt',
        'nomor_kep_skep',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }

    public function getTmtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
