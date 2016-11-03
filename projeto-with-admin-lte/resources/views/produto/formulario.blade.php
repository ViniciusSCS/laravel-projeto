@extends('layouts.app')

@section('conteudo')
<form action="/produtos/adiciona" class="form-horizontal" method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <div class="col-md-6">
            <label  >Nome</label>
            <input name="nome" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>Categorias</label>
            <select class="form-control" required>
                <option value="">Seleciona uma Categoria</option>
                @foreach ($categorias as $c)
                <option value="{{$c->idCategoria}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label >Valor</label>        
            <input name="valor" class="form-control" required>  
        </div>
        <div class="col-md-6">
            <label>Quantidade</label>
            <input name="quantidade" class="form-control col-md-3" required>
        </div>
        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" rows="3" style="resize: none;" required></textarea> 
        </div>
    </div>

    <div class="form-actions clearfix">
        <div class="pull-left">
            <button type="submit" class="btn btn-success btn-sm">
                <i class="fa fa-send fa-fw" aria-hidden="true"></i>
                Salvar
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
