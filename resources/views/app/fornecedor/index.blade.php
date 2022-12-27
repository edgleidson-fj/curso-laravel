<h3>Fornecedor</h3>

@php
    /*
    if(isset(variavel)) {} //isset retorna True se a variavel estiver definida
    */
@endphp

{{--@dd($fornecedores);--}}


<!--isset retorna True se a variavel estiver definida-->
@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}<br>
    Status: {{$fornecedores[0]['status']}}<br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}<br>
    @endisset
    <hr>
    Fornecedor: {{$fornecedores[1]['nome']}}<br>
    Status: {{$fornecedores[1]['status']}}<br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{$fornecedores[1]['cnpj']}}<br>
    @endisset
@endisset