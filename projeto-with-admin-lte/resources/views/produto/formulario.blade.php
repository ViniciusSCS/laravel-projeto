@extends('layouts.app')

@section('conteudo')
<form action="/produtos/adiciona" method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <div class="col-md-6">
            <label >Nome</label>
            <input name="nome" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>Categorias</label>
            <select class="form-control" required>
                <option value="">Seleciona uma Categoria</option>
                @foreach ($categorias as $c)
                <option value="{{$c->idCategorias}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label >Valor</label>        
            <input name="valor" class="form-control" required>  
        </div>
        <div class="col-md-6">
            <label>Quantidade</label>
            <input name="quantidade" class="form-control col-md-3" required>
        </div>
        <div class="col-md-6">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="3" required></textarea> 
        </div>

    </div>
    
    <div class="form-group">

        <div class="col-md-6">
            <button class="btn btn-success" type="submit">Salvar</button>
        </div>

    </div>
</form>

@stop
