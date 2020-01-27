<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use  App\Models\Product;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(Category::class, 5)->create();
        factory(Product::class, 10)->create();
    }
}