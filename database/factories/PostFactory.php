<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $html = $faker->randomHtml(6, 10);
    preg_match('/<body>(.*)<\/body>/s', $html, $matches);

    $content = substr($matches[0], strlen('<body>'));
    $content = substr($content, 0, -strlen('</body>'));

    return [
        'title' => $faker->title,
        'content' => $content,
        'cover' => $faker->imageUrl(300, 300),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
