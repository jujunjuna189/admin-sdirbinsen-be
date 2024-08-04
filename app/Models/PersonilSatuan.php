<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonilSatuan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'personil_satuan';

    protected $fillable = [
        'personil_id',
        'satuan_id',
        'tmt',
        'status',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
