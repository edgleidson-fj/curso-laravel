<h3>Fornecedor</h3>

@php
    /*
    if(condicao) {} //if executa enquanto a condição for True
    */
@endphp

{{--@dd($fornecedores);--}}

{{--@unless executa enquanto o resultado for falso--}}

Fornecedor: {{$fornecedores[0]['nome']}}<br>
Status: {{$fornecedores[0]['status']}}<br><br>

@unless($fornecedores[0]['status'] == 'S') <!--unless executa enquanto o resultado for falso -->
    Fornecedor inativo
@endunless
<br>

