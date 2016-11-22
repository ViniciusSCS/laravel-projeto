@extends('layouts.app')

@section('conteudo')
<form action="/categorias/adiciona" class="form-horizontal" method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <div class="col-md-6">
            <label >Nome</label>
            <input name="nome" class="form-control" required>
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
