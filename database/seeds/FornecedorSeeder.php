<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Obs: Formas de execução de Insert

        //1ª forma
        $f = new Fornecedor();
        $f->nome = 'Fornecedor 123';
        $f->site = 'fornecedor123.com.br';
        $f->uf = 'BA';
        $f->email = 'fornecedor123@teste.com';
        $f->save();  

        //2ª forma - Obs: Necessário do $fillable definido no Model
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site'=> 'fornecedor200.com.br',
            'uf'=>'RS',
            'email'=>'contato@teste.com'
        ]);

        //3ª forma - Obs: Necessário do $fillable definido no Model
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=> 'fornecedor300.com.br',
            'uf'=>'DF',
            'email'=>'contato@teste.com'
        ]);
    }
}
