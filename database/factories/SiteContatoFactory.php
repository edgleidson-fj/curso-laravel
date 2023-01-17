<?php //Factory  = Dados falsos para popular tabelas

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'telefone'=>$faker->tollFreePhoneNumber,
        'email'=>$faker->unique()->email, //Gerar emails aleatório de forma única
        'motivo_contato'=>$faker->numberBetween(1,3), //Gerar números aleatórios entre 1 e 3
        'mensagem'=>$faker->text(200) //Gerar um texto aleatório de até 200 caracteres
    ];
});
