<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adiciona as colunas UF e Email na tabela Fornecedores
        Schema::table('fornecedores', function (Blueprint $table){
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remoção das colunas UF e Email da tabela Fornecedores
        Schema::table('fornecedores', function (Blueprint $table){
            //$table->dropColumn('uf'); //individual
            $table->dropColumn(['uf','email']); //Array associativo
        });
    }
}
