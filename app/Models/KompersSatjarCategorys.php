<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompersSatjarCategorys extends Model
{
    use HasFactory;

    protected $table = 'kompers_satjar_categorys';
    protected $guarded = ['id'];
}
