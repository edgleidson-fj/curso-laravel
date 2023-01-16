<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFornecedoresNovaColunaSoftdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Habilitar SoftDelete
        Schema::table('fornecedores', function (Blueprint $table) {
           $table->softDeletes();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Desabilitar SoftDelete
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropSoftDeletes();    
         });
    }
}
