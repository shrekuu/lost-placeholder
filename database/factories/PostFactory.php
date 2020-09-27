<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $paragraphs = $faker->paragraph(20, 20);

    // 把每个句子做成段落
    $content = '<p>' . str_replace('.', '.</p><p>', $paragraphs) . '</p>';

    $coverKey = random_int(1, 10);

    return [
        'title' => $faker->sentence,
        'content' => $content,
        'cover' => "https://placeholdit.projects.linwise.com/v2?dimension=640x480&category=city&key=$coverKey",
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
