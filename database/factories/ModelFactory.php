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
    $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\Address($faker));

    return [
        'Matricula'         => 'A'.$faker->numberBetween($min = 1000, $max = 9000),
        'Nome'              => $faker->firstName.' '.$faker->lastName,
        'DataNascimento'    => $faker->unique()->dateTimeBetween($startDate = "720 days", $endDate = "4380 days")->format('Y-m-d'),//$faker->date($max = 'now'),
        'Sexo'              => $faker->randomElement($array = array ('M','F')),
        'TelResidencial'    => $faker->phone,
        'Endereco'          => $faker->streetName,
        'Numero'            => $faker->buildingNumber,
        'Municipio'         => $faker->city,
        'Bairro'            => $faker->city,
        'Estado'            => 'RJ',
        'CEP'               => $faker->postcode,
        'Complemento'       => $faker->streetSuffix,
        'Pai'               => $faker->firstNameMale.' '.$faker->lastName,
        'RGPai'             => $faker->rg($formatted = true),
        'CPFPai'            => $faker->cpf($formatted = true),
        'CelPai'            => $faker->cellphone(true, true),
        'TelTrabPai'        => $faker->phone,
        'RamalTrabPai'      => $faker->numberBetween($min = 1000, $max = 9000),
        'EmailPai'          => $faker->email,
        'Mae'               => $faker->firstNameFemale.' '.$faker->lastName,
        'RGMae'             => $faker->rg($formatted = true),
        'CPFMae'            => $faker->cpf($formatted = true),
        'CelMae'            => $faker->cellphone(true, true),
        'TelTrabMae'        => $faker->phone,
        'RamalTrabMae'      => $faker->numberBetween($min = 1000, $max = 9000),
        'EmailMae'          => $faker->email,
        'TipoSanguineo'     => $faker->randomElement($array = array('O','A','AB')),
        'FatorRH'           => $faker->randomElement($array = array('+','-')),
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
