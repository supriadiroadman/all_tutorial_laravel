<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $value) {
            Product::create([
                'title' => 'Title ' . $value,
                'slug' => 'title-' . $value,
                'description' => 'Description ' . $value,
                'price' => rand(5000, 10000),
                'stock' => rand(1, 50),
            ]);
        }
    }
}
