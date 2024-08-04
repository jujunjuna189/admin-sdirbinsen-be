<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SatuanKelengkapan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'satuan_kelengkapan';

    protected $fillable = [
        'satuan_id',
        'nama',
        'status',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
