@extends('layouts.app')

@section('conteudo')

@if(empty($produtos))
<div class="alert alert-danger">
    <i class="fa fa-hdd-o" aria-hidden="true"></i>
    Você não tem nenhum produto cadastrado.
</div>
@else
<h1>Listagem de Produtos</h1>

<div class="row">
    <div class="form-group col-md-12">
        <div class="col-md-2 pull-right">
            <a href="/produtos/novo" class="btn btn-success btn-block">
                <i class="fa fa-fw fa-plus"></i>Adicionar Produto
            </a>
        </div>
    </div>
</div>

<div class="form-group">
    <table class="table table-responsive table-striped">
        <tr>
            <td></td>
            <td>NOME</td>
            <td>CATEGORIA</td>
            <td style="text-align: center">VALOR</td>
            <td>DESCRIÇÃO</td>
            <td>QTD</td>
            <td style="text-align: center">AÇÕES</td>
        </tr>
        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade <= 2 ? 'danger' : 'success'}}">
            <td># {{$p->id}}</td>
            <td class="col-md-3">
                <a href="/produtos/mostra/{{$p->id}}">
                    {{$p->nome}}
                </a>
            </td>
            <td>
                {{$p->categoria->nome}}
            </td>
            <td style="text-align: left">R$ {{$p->valor}}</td>
            <td class="col-md-3">{{str_limit($p->descricao, 30)}}</td>
            <td >{{$p->quantidade}}</td>
            <td data-title="AÇÃO" style="text-align: center">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" >
                        <i class="fa fa-gear fa-fw "></i> Opções <span class="fa fa-caret-down fa-fw"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="/produtos/alterar/{{$p->id}}">
                                <i class="fa fa-fw fa-edit"></i>Alterar
                            </a>
                        </li>
                        <li>
                            <a href="/produtos/excluir/{{$p->id}}">
                                <i class="fa fa-fw fa-trash"></i>Excluir
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
        @if($p->quantidade <= 2)
        <h4>
            <div class="label label-danger pull-right ">
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                Um ou menos itens no estoque
            </div>
        </h4>
        @endif
    </table>
</div>

@stop