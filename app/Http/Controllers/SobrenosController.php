<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware; //Middleware

class SobrenosController extends Controller
{
    public function __construct(){
        $this->middleware(LogAcessoMiddleware::class); //Controller utilizando Middleware
    }

    public function sobrenos(){
        return view('site.sobrenos', ['titulo'=>'Sobre nós']);
    }
}
