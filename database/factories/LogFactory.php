<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Log;
use Illuminate\Support\Str;
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

$factory->define(Log::class, function (Faker $faker) {
    $projects = App\Project::pluck('id')->toArray();
    $severity = App\Severity::pluck('id')->toArray();
    return [
        'severity' => $faker->randomElement($severity),
        'project' => $faker->randomElement($projects),
        'user' => $faker->text(10),
        'details' => $faker->text(20),
    ];
});
