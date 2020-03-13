<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        ['id' => 1, 'product_name' => 'Administrator'],
        ['id' => 2, 'product_name' => 'Simple user']
    ];
});
