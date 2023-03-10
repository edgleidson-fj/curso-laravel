<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    public function __construct(){
        $this->middleware('log.acesso'); //Acessando Middleware através do apelido definido no Kernel
    }

    public function sobrenos(){
        return view('site.sobrenos', ['titulo'=>'Sobre nós']);
    }
}
