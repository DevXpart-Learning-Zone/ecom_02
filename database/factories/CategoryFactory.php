<?php


use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->text('20'))
    ];
});