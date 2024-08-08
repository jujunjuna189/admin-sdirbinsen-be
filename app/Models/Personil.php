<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personil extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'personil';

    protected $fillable = [
        'satuan_id',
        'nrp',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'suku_bangsa',
        'golongan_darah',

        'jabatan',
        'pangkat',
        'korps',
        'sumber_pa',
        'psi',
        'status',

        'tmt_1',
        'tmt_2',
        'tmt_tni',
        'tmt_jab',

        'picture',
    ];

    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getTmtTniAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getTmtJabAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getPictureAttribute($value)
    {
        // Check if the value is not empty
        if (!empty($value)) {
            // Prefix the hostname/storage/ to the picture value
            return env('APP_URL') . '/storage/' . $value;
        }

        // If the value is empty, return a default image or whatever you prefer
        // return config('APP_URL') . '/storage/default.jpg';
    }

    protected $dates = ['deleted_at'];

    public function scopeNotDeleted($query)
    {
        return $query->whereNull('deleted_at');
    }

    /**
     * Define the relationship with RiwayatKepangkatan model.
     */
    public function pangkats()
    {
        return $this->hasMany(RiwayatKepangkatan::class, 'personil_id');
    }

    public function kepangkatanSekarang()
    {
        return $this->hasOne(RiwayatKepangkatan::class, 'personil_id')
            ->where('isActive', 1)
            ->orderBy('tmt', 'desc')
            ->limit(1);
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }

    /**
     * Define the relationship with RiwayatJabatan model.
     */
    public function jabatans()
    {
        return $this->hasMany(RiwayatJabatan::class, 'personil_id');
    }

    public function jabatanSekarang()
    {
        return $this->hasOne(RiwayatJabatan::class, 'personil_id')
            ->where('isActive', 1)
            ->orderBy('tmt', 'desc')
            ->limit(1);
    }

    /**
     * Define the relationship with PendidikanUmum model.
     */
    public function pendidikanUmum()
    {
        return $this->hasMany(PendidikanUmum::class, 'personil_id');
    }

    /**
     * Define the relationship with PendidikanMiliter model.
     */
    public function pendidikanMiliter()
    {
        return $this->hasMany(PendidikanMiliter::class, 'personil_id');
    }

    /**
     * Define the relationship with RiwayatKepangkatan model.
     */
    public function riwayatKelengkapan()
    {
        return $this->hasMany(RiwayatKelengkapan::class, 'personil_id');
    }

    /**
     * Define the relationship with RiwayatKepangkatan model.
     */
    public function penugasanLuarNegeri()
    {
        return $this->hasMany(RiwayatPenugasanLuarNegeri::class, 'personil_id');
    }

    public function penugasanOperasi()
    {
        return $this->hasMany(RiwayatPenugasanOperasi::class, 'personil_id');
    }

    public function tandaJasa()
    {
        return $this->hasMany(RiwayatTandaJasa::class, 'personil_id');
    }

    public function keluarga()
    {
        return $this->hasOne(RiwayatKeluarga::class, 'personil_id');
    }

    public function kemampuanBahasa()
    {
        return $this->hasMany(KemampuanBahasa::class, 'personil_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'personil_id');
    }

    /**
     * Define Laravel Scout Searchable
     */
    // public function toSearchableArray()
    // {
    //     return [
    //         'nama' => $this->nama,
    //     ];
    // }
}
