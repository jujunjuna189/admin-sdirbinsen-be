<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinsiapsatBinsatLaplakgiat extends Model
{
    use HasFactory;

    protected $table = 'binsiapsats_binsat_laplakgiat';
    protected $guarded = ['id'];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
