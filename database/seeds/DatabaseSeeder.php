<?php

use App\Models\Admin;
use App\Models\Brand;
use  App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(Admin::class, 1)->create();
        factory(Brand::class, 5)->create();
        factory(Category::class, 5)->create();
        factory(Product::class, 5)->create();
    }
}