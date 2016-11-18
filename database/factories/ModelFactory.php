<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//Lo ejecuto en tinker
//factory(Modelo::class,cuantos)->create();
//El factory para modelos con relacioens se hace con una iteracion similar a esto
//factory(Modelo::class,cuantos)->create()->each()->save();
$factory->define(App\Models\Task::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'color' => '#00000',
        'priority' => $faker->numberBetween($min = 1, $max = 5),
        'project_id' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => Auth::user()->id,
    ];
});



$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
