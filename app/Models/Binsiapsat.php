<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binsiapsat extends Model
{
    use HasFactory;

    protected $table = 'binsiapsats';

    protected $fillable = [
        'satuan_id',
        // 'kategori_id',
        'kategori',
        'kuantitatif',
        'kualitatif',
        'kemantapan',
        'keterangan',
        'file',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }

    public function kategori_binsiapsat()
    {
        return $this->belongsTo(MasterBinsiapsatCategory::class, 'kategori_id');
    }
}
