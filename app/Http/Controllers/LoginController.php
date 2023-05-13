<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo'=>'Login']);
    }

    public function autenticar(Request $request){
        //Regras de validação
        $regras = [
            'usuario'=> 'email',
            'senha'=>'required'
        ];

        //Mensagens de feedback
        $feedback = [
            'usuario.email'=>'O campo usuário (email) é obrigatório',
            'senha.required'=>'O campo senha é obrigatório'
        ];

        //validação
        $request->validate($regras, $feedback);

        print_r($request->all());
    }
}
