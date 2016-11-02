@extends('layouts.app')

@section('conteudo')

<form action="{{route('produtos.atualizar', $produto->id)}}" method="POST">    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    <div class="form-group">
        <div class="col-md-6">
            <label>Nome</label>
            <input name="nome" value="{{$produto->nome}}" class="form-control">
        </div>
        <div class="col-md-6">
            <label>Valor</label>        
            <input name="valor" value="{{$produto->valor}}"  class="form-control">  
        </div>
        <div class="col-md-6">
            <label>Quantidade</label>
            <input name="quantidade" value="{{$produto->quantidade}}"  class="form-control col-md-3">
        </div>
        <div class="col-md-6">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="3">{{$produto->descricao}}</textarea> 
        </div>

        <div class="col-md-6">
            <button class="btn btn-success" type="submit">Atualizar</button>
        </div>
    </div>
    
</form>

@stop
