<?php

namespace App\Http\Controllers;

use Request;
use App\Produto;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produto = Produto::find($id);
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {

//        $params = Request::all();
//        $produto = new Produto($params);
//        
//        $produto->save();
        // essa forma de baixo funciona da mesma forma que a forma de cima
        Produto::create(Request::all());

        return redirect()
                        ->action('ProdutoController@lista')
                        ->withInput(Request::only('nome'));
    }

    public function excluir($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function alterar($id) {

        $produtos = Produto::find($id);

        return view('produto.alterar')->with('produtos', $produtos);
    }

    public function atualizar() {

//        $flight = App\Flight::find(1);
//
//        $flight->name = 'New Flight Name';
//
//        $flight->save();

        $produto = Produto::find(1);
        
        $produto->nome = 'Geladeira';
        $produto->descricao = 'Teste';
        $produto->valor = '59.00';
        $produto->quantidade = '2';
        
        $produto->save();

        return redirect()->action('ProdutoController@lista');
    }

}
