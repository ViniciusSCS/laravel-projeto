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
        $produto = Produto::create($request->all());
        
        if($produto) {
            session()->flash('message.success', "O produto $produto->nome foi cadastrado.");

            
        }else{
            session()->flash('message.error', "O produto não foi cadastrado. Tente novamente.");
        }
        
        return redirect()->route('produtos.lista');
    }

    public function excluir($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function alterar($id) {

        $produto = Produto::find($id);
        $categoria = Categoria::all();
        return view('produto.alterar')->with('produto', $produto)->with('categoria', $categoria);
    }

    public function atualizar($id, Request $request) {
        Produto::findOrFail($id)->update($request->all());
        return redirect()->route('produtos.lista');
    }

}
