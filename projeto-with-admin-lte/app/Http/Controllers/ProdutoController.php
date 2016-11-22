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
            session()->flash('message.success', MensagemController::produtoInserir($produto->nome));
            
        }else{
            session()->flash('message.error', MensagemController::produtoInserirErro());
        }
        
        return redirect()->route('produtos.lista');
    }

    public function excluir($id) {
        $produto = Produto::find($id);
        $produto->delete();
        if($produto) {
            session()->flash('message.success', MensagemController::produtoExcluir($produto->nome));
            
        }else{
            session()->flash('message.error', MensagemController::produtoInserirErro());
        }
        
        return redirect()->action('ProdutoController@lista');
    }

    public function alterar($id) {
        $produto = Produto::find($id);
        $categoria = Categoria::all();
        return view('produto.alterar')->with('produto', $produto)->with('categoria', $categoria);
    }

    public function atualizar($id, Request $request) {
        $produto = Produto::findOrFail($id)->update($request->all());        
        
        if($produto) {
            $produto = Produto::findOrFail($id);
            session()->flash('message.success', MensagemController::produtoAtualizar($produto->nome));
            
        }else{
            session()->flash('message.error', MensagemController::produtoAtualizarErro());
        }
        return redirect()->route('produtos.lista');
        
    }

}
