<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'material';

    protected $fillable = [
        'satuan_id',
        'nama',
        'kategori',
        'kondisi',
        'jenis',
        'file',
        'status',
        'no_reg',
        'keterangan',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
