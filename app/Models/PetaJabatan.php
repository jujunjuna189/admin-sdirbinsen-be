<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetaJabatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'peta_jabatan';
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
    public function scopeNotDeleted($query)
    {
        return $query->whereNull('deleted_at');
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }

    public function personil()
    {
        return $this->hasOne(Personil::class, 'id', 'personil_id');
    }
}
