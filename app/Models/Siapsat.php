<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siapsat extends Model
{
    use HasFactory;

    protected $table = 'siapsat';
    protected $guarded = ['id'];
}
