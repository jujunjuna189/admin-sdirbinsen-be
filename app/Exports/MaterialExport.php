<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MaterialExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $materials;

    public function __construct($materials)
    {
        $this->materials = $materials;
    }

    public function collection()
    {
        return $this->materials;
    }

    public function headings(): array
    {
        return [
            'No',
            'Judul',
            'Kategori',
            'Deskripsi',
            'File',
            'Dibuat Tanggal',
        ];
    }
}
