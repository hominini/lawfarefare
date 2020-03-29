<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->text(40), 
        'subject' => $faker->text(100),
        'parent_id' => $faker->numberBetween(2, 0xffff),
    ];
});
