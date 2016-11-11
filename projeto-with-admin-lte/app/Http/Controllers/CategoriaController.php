<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller {

    public function lista() {
        $categorias = Categoria::all();
        return view('categoria.listagem')->with('categorias', $categorias);
    }

    public function novo() {
        return view('categoria.formulario');
    }

    public function adiciona(Request $request) {
        $categoria = Categoria::create($request->all());

        if ($categoria) {
            session()->flash('message.success', MensagemController::categoriaInserir($categoria->nome));
        } else {
            session()->flash('message.error', MensagemController::categoriaInserirErro());
        }

        return redirect()->route('categorias.lista');
    }

    public function mostra($idCategoria) {
        
    }

    public function alterar($idCategoria) {
        
    }

    public function atualizar(Request $request, $idCategoria) {
        
    }

    public function excluir($idCategoria) {
        
    }

}
