<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendidikanMiliter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pendidikan_militer';

    protected $fillable = [
        'personil_id',
        'dikma_diktuk_dibangun',
        'tahun',
        'prestasi',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
