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

$factory->define(App\Models\User::class , function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password?:$password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Medicamento::class , function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Remedio($faker));

    return [
        'Nome'        => $faker->name
    ];
});

$factory->define(App\Models\Aluno::class , function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    return [
        'Nome'        => $faker->name,
        
    ];
});

/**  $factory->define(App\Telefone::class , function (Faker\Generator $faker) {
$faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

return [
'tipo'     => $faker->randomElement(['Comercial','Celular','Residencial']),
'telefone' => $faker->phoneNumber
];
});

$factory->define(App\Contrato::class , function (Faker\Generator $faker) {
$faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

return [
'nrocontrato'  => $faker->numberBetween(1,3000),
'dataregistro' => $faker->date('Y-m-d','now')
];
});
 *
 * */

/** @var \Illuminate\Database\Eloquent\Factory $factory
$factory->define(App\User::class, function (Faker\Generator $faker) {
static $password;

return [
'name' => $faker->name,
'email' => $faker->unique()->safeEmail,
'password' => $password ?: $password = bcrypt('secret'),
'remember_token' => str_random(10),
];
});*/
