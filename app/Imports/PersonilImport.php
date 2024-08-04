<?php
namespace App\Imports;

use App\Models\Personil;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonilImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $personil = new Personil();
        $personil->nrp = $row['nrp'];
        $personil->satuan = $row['satuan'];
        $personil->nama = $row['nama'];
        $personil->tanggal_lahir = $row['tanggal_lahir'];
        $personil->tempat_lahir = $row['tempat_lahir'];
        $personil->tmt_tni = $row['tmt_tni'];
        $personil->tmt = $row['tmt'];
        $personil->agama = $row['agama'];
        $personil->suku_bangsa = $row['suku_bangsa'];
        $personil->golongan_darah = $row['golongan_darah'];
        $personil->sumber_pa = $row['sumber_pa'];
        $personil->psi = $row['psi'];
        $personil->status = $row['status'];

        return $personil;
    }
}
