<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Author;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'description'=>$faker->name(),
        'author_id'=>factory(Author::class)->create()->id
        //'author_id'=>rand(1,5)
        // su rand(id) apribojamas duomenu skaicius
    ];
});
