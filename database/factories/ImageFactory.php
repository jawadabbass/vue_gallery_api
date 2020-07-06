<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'name' => $faker->image('public/storage/images', 400, 300, null, false),
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'user_id' => factory(App\User::class),
        'category_id' => factory(App\Category::class),
        'views' => 100,
        'likes' => 70,
        'dislikes' => 30,
    ];
});
