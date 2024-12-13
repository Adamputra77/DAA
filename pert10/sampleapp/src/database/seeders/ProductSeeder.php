<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            ['name' => 'Vans', 'price' => 100000, 'category' => 'Sepatu'],
            ['name' => 'Converse', 'price' => 150000, 'category' => 'Sepatu'],
            ['name' => 'Rucas', 'price' => 500000, 'category' => 'Celana'],
            ['name' => 'H&M', 'price' => 100000, 'category' => 'Baju'],
        ]);
    }
}