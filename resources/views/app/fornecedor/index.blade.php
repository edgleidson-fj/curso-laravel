<h3>Fornecedor</h3>

@php
    /*
    if(empty(variavel)) {} //empty retorna True se a variavel estiver vazia
    Ex: 
    - '' 
    - 0 
    - 0.0 
    - '0' 
    - null 
    - false 
    - array() 
    - variavel que foi criada sem valor
    */
@endphp

{{--@dd($fornecedores);--}}


<!--isset retorna True se a variavel estiver definida-->
@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}<br>
    Status: {{$fornecedores[0]['status']}}<br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}<br>
        @empty($fornecedores[0]['cnpj']) <!--empty retorna True se a variavel estiver vazia-->
            - CNPJ vazio 1
        @endempty
    @endisset
    <hr>
    Fornecedor: {{$fornecedores[1]['nome']}}<br>
    Status: {{$fornecedores[1]['status']}}<br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{$fornecedores[1]['cnpj']}}<br>
        @empty($fornecedores[1]['cnpj'])
            - CNPJ vazio 2
        @endempty
    @endisset
@endisset