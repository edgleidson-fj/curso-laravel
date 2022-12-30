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
    <!--foreach -->
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{$fornecedor['nome']}}<br>
        Status: {{$fornecedor['status']}}<br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}<br> <!-- ?? -> Valor default-->   
        Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}<br> <!--(00) 0000-0000 -->
        <hr>
    @endforeach
@endisset