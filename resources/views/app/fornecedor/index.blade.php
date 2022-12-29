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
    Fornecedor: {{$fornecedores[1]['nome']}}<br>
    Status: {{$fornecedores[1]['status']}}<br>
    CNPJ: {{$fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido'}}<br> <!-- ?? -> Valor default-->   
    Telefone: ({{$fornecedores[1]['ddd'] ?? ''}}) {{$fornecedores[1]['telefone'] ?? ''}}<br> <!--(00) 0000-0000 -->

    <!--Switch Case-->
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP 
            @break
        @case('71')
            Salvador - BA 
            @break 
        @case('85')
            Fortaleza - CE 
            @break 
        @default
            Estado não identificado    
    @endswitch
@endisset