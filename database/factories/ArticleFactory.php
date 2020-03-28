<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'article_number' => $faker->numberBetween(2, 0xffff),
        'article_body' => $faker->paragraphs(10, true),
        'category_id' => $faker->numberBetween(2,0xffff),
    ];
});
