<?php
namespace App\Exports;

use App\Models\Personil;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PersonilExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $personils;

    public function __construct($personils)
    {
        $this->personils = $personils;
    }

    public function collection()
    {
        return $this->personils;
    }

    public function headings(): array
    {
        return [
            'No',
            'NRP',
            'Nama',
            'Posisi',
            'Jabatan',
            'Batalyon',
            'Username',
            'Mulai Dari',
            'Jumlah Tahun',
            'Jumlah Sisa Bulan'
        ];
    }
}
