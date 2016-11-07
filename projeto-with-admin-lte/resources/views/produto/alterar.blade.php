@extends('layouts.app')

@section('conteudo')

<form action="{{route('produtos.atualizar', $produto->id)}}" class="form-horizontal" method="POST"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <div class="col-md-6">
            <label>Nome</label>
            <input name="nome" value="{{$produto->nome}}" class="form-control">
        </div>
        <div class="col-md-6">
            <label>Categorias</label>
            <select name="idCategoria" class="form-control" required>
                @foreach ($categoria as $c)
                @if($c->idCategoria == $produto->idCategoria)
                <option value="{{$c->idCategoria}}" selected>{{$c->nome}}</option>
                @else
                <option value="{{$c->idCategoria}}" >{{$c->nome}}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label>Valor</label>        
            <input name="valor" value="{{$produto->valor}}"  class="form-control">   
        </div>
        <div class="col-md-6">
            <label>Quantidade</label>
            <input name="quantidade" value="{{$produto->quantidade}}"  class="form-control col-md-3">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="3">{{$produto->descricao}}</textarea> 
        </div>
    </div>

    <div class="form-actions clearfix">
        <div class="pull-left">
            <button type="submit" class="btn btn-success btn-sm">
                <i class="fa fa-send fa-fw" aria-hidden="true"></i>
                Atualizar
            </button>
        </div>
        <div class="pull-right">
            <div class="col-md-12 text-right text-muted">
                (*) Campos Obrigatórios
            </div>
        </div>
    </div>

</form>

@stop
