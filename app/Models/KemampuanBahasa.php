<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KemampuanBahasa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kemampuan_bahasa';

    protected $fillable = [
        'personil_id',
        'nama',
        'jenis_bahasa',
        'status',
    ];

    // Define the relationship with the 'personil' table
    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
