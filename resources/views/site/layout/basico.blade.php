<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("/css/estilo_basico.css")}}">  <!--CSS-->      
    </head>

    <body>
        @include('site.layout._partials.topo') <!--Include - Topo e Menu da página-->
        @yield('conteudo') <!--Yield -- Pegar conteúdo da section-->
    </body>
</html>