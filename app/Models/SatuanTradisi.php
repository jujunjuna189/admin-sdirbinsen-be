<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanTradisi extends Model
{
    use HasFactory;

    protected $table = 'satuan_tradisi';
    protected $guarded = ['id'];
}