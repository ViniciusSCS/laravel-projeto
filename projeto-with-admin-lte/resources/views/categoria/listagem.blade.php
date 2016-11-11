@extends('layouts.app')

@section('conteudo')

@if(empty($categorias))
<div class="alert alert-danger">
    <i class="fa fa-hdd-o" aria-hidden="true"></i>
    Você não tem nenhuma categoria cadastrada.
</div>
@else
<h1>Listagem de Categorias</h1>

<div class="row">
    <div class="form-group col-md-12">
        <div class="col-md-2 pull-right">
            <a href="/categorias/novo" class="btn btn-success btn-block">
                <i class="fa fa-fw fa-plus"></i>Adicionar Categoria
            </a>
        </div>
    </div>
</div>

<div class="form-group">
    <table class="table table-responsive table-striped">
        <tr>
            <td></td>
            <td>NOME</td>
            <td style="text-align: center">AÇÕES</td>
        </tr>
        @foreach ($categorias as $c)
        <tr class='success'>
            <td style="text-align: center;"> # {{$c->idCategoria}}</td>
            <td class="col-md-3">
                <a href="/categorias/mostra/{{$c->idCategoria}}">
                    {{$c->nome}}
                </a>
            </td>
            <td data-title="AÇÕES" style="text-align: center">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" >
                        <i class="fa fa-gear fa-fw "></i> Opções <span class="fa fa-caret-down fa-fw"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="/categorias/alterar/{{$c->idCategoria}}">
                                <i class="fa fa-fw fa-edit"></i>Alterar
                            </a>
                        </li>
                        <li>
                            <a href="/categorias/excluir/{{$c->idCategoria}}">
                                <i class="fa fa-fw fa-trash"></i>Excluir
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
@stop