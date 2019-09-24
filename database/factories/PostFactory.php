<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $paragraphs = $faker->paragraph(20, 20);

    $paragraphs = explode('.', $paragraphs);
    $paragraphs = join('</p><p>', $paragraphs);
    $content = '<p>'. $paragraphs . '</p>';

    return [
        'title' => $faker->sentence,
        'content' => $content,
        'cover' => $faker->imageUrl(300, 300),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
