<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanLambang extends Model
{
    use HasFactory;

    protected $table = 'satuan_lambang';
    protected $guarded = ['id'];
}
