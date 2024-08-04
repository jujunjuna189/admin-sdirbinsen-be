<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatPersonil extends Model
{
    use HasFactory;

    protected $fillable = ['personil_id', 'name', 'file'];
}
