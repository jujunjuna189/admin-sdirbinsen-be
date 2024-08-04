<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Senjata extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'senjata';

    protected $fillable = [
        'satuan_id',
        'nama',
        'image',
        'status',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
