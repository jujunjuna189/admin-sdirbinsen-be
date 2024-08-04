<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatTandaJasa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'riwayat_tanda_jasa';

    protected $fillable = [
        'personil_id',
        'tanda_kehormatan',
    ];

    // Define the relationship with the 'personil' table
    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
