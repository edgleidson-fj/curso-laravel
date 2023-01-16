<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //import SofDelete

class Fornecedor extends Model
{
    use SoftDeletes;

    //Definir outro nome para tabela. Obs: Por padrão ficaria 'fornecedors'
    protected $table = 'fornecedores';

    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
