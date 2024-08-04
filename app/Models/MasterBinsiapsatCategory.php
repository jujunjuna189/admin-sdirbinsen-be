<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBinsiapsatCategory extends Model
{
    use HasFactory;

    protected $table = 'master_binsiapsat_categories';

    protected $fillable = [
        'name',
    ];
}
