@extends('site.layout.basico') <!--Extends -- Layout base-->

@section('titulo', $titulo) <!--Section -- Título da página-->

@section('conteudo') <!--Section -- Conteúdo da página-->  
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div class="informacao-pagina">
           <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('site.login') }}" method="post">
            @csrf
            <input name="usuario" type="text" placeholder="Usuário" class="borda-preta" value="{{ old('usuario') }}">
            {{ $errors->has('usuario')? $errors->first('usuario') : '' }}

            <input name="senha" type="password" placeholder="Senha" class="borda-preta">
            {{ $errors->has('senha')? $errors->first('senha') : '' }}

            <button type="submit" class="borda-preta">Acessar</button>
            </form>
            </div>
        </div>  
    </div>    
@endsection    