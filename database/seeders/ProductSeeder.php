<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'C-BUCKTHORN OIL',
                'description' => 'General Health Suppliment with omega 3',
                'image' => '',
            ],
            [
                'id' => 2,
                'name' => 'FAIR LADY SKINCARE SET',
                'description' => '4 in 1 FAIR LADY (BAKUCHIOL SERIES)',
                'image' => '',
            ],
            
        ];
   
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
