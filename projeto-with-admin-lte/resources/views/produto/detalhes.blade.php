@extends('layouts.app')

@section('conteudo')
<h1>Destalhes do produto {{$p->nome}} </h1>
<ul>
    <li>
        Descrição: {{$p->descricao or 'Não possui descrição '}}
    </li>
    <li>
        Valor: R$ {{$p->valor}}
    </li>
    <li>
        Quantidade: {{$p->quantidade}}
    </li>
</ul>
@stop