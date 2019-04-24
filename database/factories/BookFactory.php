<?php
// Noi tao du lieu mau
use Faker\Generator as Faker;
use App\Book; //them dong nay
$factory->define(Book::class, function (Faker $faker) { //doi Model->Book
    return [
        "name" =>$faker->text(50),
        "description" =>$faker->text(150),
        "quantity" => random_int(0, 150),
        "price" => random_int(10*1000, 100 * 1000),
        'image' =>$faker->imageUrl()
    ];
});
