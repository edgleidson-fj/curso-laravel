<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionando a coluna nova
        Schema::table('site_contatos', function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //Aplicando todos valores que estão em motivo_contato e atribuindo para nova coluna
        DB::statement('UPDATE site_contatos SET motivo_contatos_id = motivo_contato');

        //Criando a contrant FK e removendo a coluna obsoleta
        Schema::table('site_contatos', function(Blueprint $table){
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Criando a coluna obsoleta novamente e removendo a contraint FK
        Schema::table('site_contatos', function(Blueprint $table){           
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //Retornar todos valores que estão em motivo_contato_id para coluna obsoleta novamente
        DB::statement('UPDATE site_contatos SET motivo_contato = motivo_contatos_id');

        //Removendo a coluna nova
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('motivo_contatos_id');
        });
    }
}
