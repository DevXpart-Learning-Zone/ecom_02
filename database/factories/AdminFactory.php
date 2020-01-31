<?php



use App\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin')
    ];
});