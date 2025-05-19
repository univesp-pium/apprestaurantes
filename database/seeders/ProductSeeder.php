<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id'   => Category::first()->id,
                'unit_id'       => Unit::first()->id,
                'title'         => 'Coxão Mole',
                'description'   => 'Coxão Mole é uma carne muito boa, muito gostosa.',
                'price'         => 35.75,
                'quantity'      => 50,
                'discount'      => 0,
            ],
            [
                'category_id'   => Category::first()->id,
                'unit_id'       => Unit::first()->id,
                'title'         => 'Alcatra',
                'description'   => 'Alcatra é uma carne muito boa, muito gostosa.',
                'price'         => 44.99,
                'quantity'      => 50,
                'discount'      => 0,
            ],
            [
                'category_id'   => Category::first()->id,
                'unit_id'       => Unit::first()->id,
                'title'         => 'Contra File',
                'description'   => 'Contra File é uma carne muito boa, muito gostosa.',
                'price'         => 39.99,
                'quantity'      => 50,
                'discount'      => 10.00,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
