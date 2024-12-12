<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanJabatanDansat extends Model
{
    use HasFactory;

    protected $table = 'satuan_jabatan_dansat';

    protected $guarded = ['id'];
}
