<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompersSatjar extends Model
{
    use HasFactory;

    protected $table = 'kompers_satjar';
    protected $guarded = ['id'];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}
