<?php
namespace App\Imports;

use App\Models\Materials;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MaterialImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $title = $row['title'];
        $category = $row['category'];
        $description = $row['description'];
        $file = $row['file'];


        $material = new Materials([
            'title' => $title,
            'category' => $category,
            'description' => $description,
            'file' => $file,
        ]);
        return $material;
    }
}
