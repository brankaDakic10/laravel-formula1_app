<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'address' => $faker->address,
        'country'=>$faker->country
    ];
});
$factory->define(App\Driver::class, function (Faker $faker) {
    return [
        'first_name' =>$faker->firstName,
        'last_name' =>$faker->lastName,
        'nationality' =>$faker->word,
        'email' => $faker->unique()->safeEmail,
        'imageUrl' => $faker->imageUrl(),
    ];
});
$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' =>$faker->word,
        'content' => $faker->text(30),
        
    ];
});