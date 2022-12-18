<?php

namespace App\Imports;

use App\Products;
use Maatwebsite\Excel\Concerns\ToModel;

class ProImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // var_dump($row);
        return new Products([
            'product_id'=>$row[0],
            'category'=>$row[1],
            'name'=>$row[2],
            'product_number'=>$row[3],
            'price'=>$row[4],
            'photos_2'=>$row[5],
            'status' => $row[6]
            ]);

    }
}
