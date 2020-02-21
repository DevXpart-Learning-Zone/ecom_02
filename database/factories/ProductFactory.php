<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name' => ucfirst($faker->text('15')),
        'category_id' => Category::all()->random(),
        'brand_id' => Brand::all()->random(),
        'price' => $faker->randomFloat(2, 50, 100),
        'description' => $faker->text(100),
        'thumb' => $faker->text('15') . $faker->randomElement(['.jpg', '.png', '.jpeg']),
        'image' => $faker->text('15') . $faker->randomElement(['.jpg', '.png', '.jpeg']),
    ];
});
