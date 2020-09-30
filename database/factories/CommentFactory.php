<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'content' => $faker->paragraph,
        'user_id' => User::all()->random()->id,
        'post_id' =>Post::all()->random()->id

    ];
});
