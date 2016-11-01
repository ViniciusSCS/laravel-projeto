@extends('layouts.app')

@section('conteudo')
<form action="/produtos/atualizar" method="POST">
    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    <div class="form-group">
        <div class="col-md-6">
            <label>Nome</label>
            <input name="nome" value="{{$produtos->nome}}" class="form-control">
        </div>
        <div class="col-md-6">
            <label>Valor</label>        
            <input name="valor" value="{{$produtos->valor}}"  class="form-control">  
        </div>
        <div class="col-md-6">
            <label>Quantidade</label>
            <input name="quantidade" value="{{$produtos->quantidade}}"  class="form-control col-md-3">
        </div>
        <div class="col-md-6">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="3">{{$produtos->descricao}}</textarea> 
        </div>

        <div class="col-md-6">
            <button class="btn btn-success" type="submit">Atualizar</button>
        </div>

    </div>
</form>

@stop
