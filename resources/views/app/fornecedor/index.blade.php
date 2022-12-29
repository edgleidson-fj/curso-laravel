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
    <!--for -->
    @for($i=0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}<br>
        Status: {{$fornecedores[$i]['status']}}<br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}<br> <!-- ?? -> Valor default-->   
        Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}}) {{$fornecedores[$i]['telefone'] ?? ''}}<br> <!--(00) 0000-0000 -->
        <hr>
    @endfor      
@endisset