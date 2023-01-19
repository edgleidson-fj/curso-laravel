<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //var_dump($_POST);
        //dd($request->all()); 

        echo'<pre>';
        print_r($request->all()); //Request com todos dados
        echo'</br>';
        echo $request->input('nome'); //Request de dados especificos

        return view('site.contato', ['titulo'=>'Contato']);
    }
}
