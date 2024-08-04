<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GolJabatan extends Model
{
    use HasFactory;

    protected $table = 'gol_jabatan';
    protected $guarded = ['id'];
}
