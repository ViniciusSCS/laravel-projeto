<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller {

//    public function __construct() {
//        $this->middleware('autenticador');
//    }

    public function lista() {
        $produtos = Produto::with('categoria')->get();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produto = Produto::find($id);
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo() {
        $categorias = Categoria::all();
        return view('produto.formulario', compact('categorias'));
    }

    public function adiciona(Request $request) {

//        $params = Request::all();
//        $produto = new Produto($params);
//        
//        $produto->save();
        // essa forma de baixo funciona da mesma forma que a forma de cima
        $produto = Produto::create($request->all());

        session()->flash('message.success', "O produto $produto->nome foi cadastrado.");

        return redirect()->route('produtos.lista');
    }

    public function excluir($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function alterar($id) {

        $produto = Produto::find($id);

        return view('produto.alterar')->with('produto', $produto);
    }

    public function atualizar($id, Request $request) {

//        $flight = App\Flight::find(1);
//
//        $flight->name = 'New Flight Name';
//
//        $flight->save();

        Produto::findOrFail($id)->update($request->all());

//        $produto->nome = $request->nome;
//        $produto->descricao = $request->descricao;
//        $produto->valor = $request->valor;
//        $produto->quantidade = $request->quantidade;
//        
//        $produto->save();
//        return redirect()->action('ProdutoController@lista');
        return redirect()->route('produtos.lista');
    }

}
