<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonil extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','personil_id','status'];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
