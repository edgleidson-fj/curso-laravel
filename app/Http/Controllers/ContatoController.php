<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //var_dump($_POST);
        //dd($request->all()); 

        /*
        echo'<pre>';
        print_r($request->all()); //Request com tudo
        echo'</br>';
        echo $request->input('nome'); //Request de dado especifico
        */

        /*/1º forma
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes()); //Request com todos dados
        $contato->save(); //Salvar no Banco
        //---------------------------------------*/

        /*/2º forma - Obs: Necessita que a Model esteja com o fillable definido
        $contato = new SiteContato();
        $contato->fill($request->all());
        //print_r($contato->getAttributes());
        $contato->save(); 
        //--------------------------------------*/

        //3º forma - Obs: Necessita que a Model esteja com o fillable definido
        // $contato = new SiteContato();
        // $contato->create($request->all());   //Salvar no Banco*/     

        $motivo_contatos = [
            '1'=>'Dúvida',
            '2'=>'Elogio',
            '3'=>'Reclamação'
        ];

        return view('site.contato', ['titulo'=>'Contato', 'motivo_contatos'=>$motivo_contatos]);
    }


    public function salvar(Request $request){
        //Validação
        $request->validate([
            'nome'=>'required|min:3|max:40',
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required|max:200',
        ]);

        //SiteContato::create($request->all());
    }
}
