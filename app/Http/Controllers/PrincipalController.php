<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){       
        $motivo_contatos = MotivoContato::all(); //Buscar tudo 

        return view('site.principal', ['titulo'=>'Principal', 'motivo_contatos'=>$motivo_contatos]);
    }
}
