@extends('layouts.app')

@section('conteudo')
<h1>Destalhes do produto {{$p->nome}} </h1>
<ul>
    <li>
        <b>Descrição:</b> {{$p->descricao or 'Não possui descrição '}}
    </li>
    <li>
        <b>Valor:</b> R$ {{$p->valor}}
    </li>
    <li>
        <b>Quantidade:</b> {{$p->quantidade}}
    </li>
</ul>
@stop