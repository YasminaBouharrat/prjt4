<?php

namespace App\Imports;

use App\Models\produit;
use Maatwebsite\Excel\Concerns\ToModel;

class ProduitImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new produit([
            'libelle'=> $row[1],
            'prix'    => $row[2],
            'Quantité'    => $row[3],
            'image'    => $row[4],
         ]);
    }
}
