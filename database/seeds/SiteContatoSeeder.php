<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new SiteContato();
        $c->nome ='Sistema SG';
        $c->telefone = '45646546585';
        $c->email ='jlgkdflkjdfgk';
        $c->motivo_contato = 1;
        $c->mensagem ='Teste';
        $c->terminal;
        $c->save();
    }
}
