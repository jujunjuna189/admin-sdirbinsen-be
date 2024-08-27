<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinsiapsatLapsatInduk extends Model
{
    use HasFactory;

    protected $table = 'binsiapsats_lapsat_induk';
    protected $guarded = ['id'];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
