<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductPrice;

class ProductPriceSeeder extends Seeder
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
                'product_id' => 1,
                'price_level' => 'RETAIL PRICE',
                'price' => 175,
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'price_level' => 'DISTRIBUTORS',
                'price' => 113.75,
            ],
            [
                'id' => 3,
                'product_id' => 1,
                'price_level' => 'STOKIST',
                'price' => 131.25,
            ],
            [
                'id' => 4,
                'product_id' => 1,
                'price_level' => 'AGENT',
                'price' => 148.75,
            ],
            [
                'id' => 5,
                'product_id' => 1,
                'price_level' => 'MINI AGENT',
                'price' => 157.50,
            ],
            [
                'id' => 6,
                'product_id' => 1,
                'price_level' => 'DROPSHIP',
                'price' => 162.75,
            ],
            [
                'id' => 7,
                'product_id' => 2,
                'price_level' => 'RETAIL PRICE',
                'price' => 155,
            ],
            [
                'id' => 8,
                'product_id' => 2,
                'price_level' => 'DISTRIBUTORS',
                'price' => 100.75,
            ],
            [
                'id' => 9,
                'product_id' => 2,
                'price_level' => 'STOKIST',
                'price' => 116.25,
            ],
            [
                'id' => 10,
                'product_id' => 2,
                'price_level' => 'AGENT',
                'price' => 131.75,
            ],
            [
                'id' =>11,
                'product_id' => 2,
                'price_level' => 'MINI AGENT',
                'price' => 139.50,
            ],
            [
                'id' => 12,
                'product_id' => 2,
                'price_level' => 'DROPSHIP',
                'price' => 144.15,
            ],

        ];

        foreach ($products as $key => $value) {
            ProductPrice::create($value);
        }
    }
}
