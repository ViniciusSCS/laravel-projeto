<?php

namespace App\Http\Controllers;

class MensagemController extends Controller {
    
    public static function produtoInserir($nome){
        return "O produto <b>$nome</b>  foi cadastrado.";
    }
    public static function produtoInserirErro(){
        return "O produto não foi cadastrado. Tente novamente.";
    }
    
    public static function categoriaInserir($nome){
        return "A categoria <b>$nome</b>  foi cadastrada.";
    }
    public static function categoriaInserirErro(){
        return "A Categoria não foi cadastrada. Tente novamente.";
    }
    
    public static function produtoAtualizar($nome){
        return "O produto <b>$nome</b>  foi atualizado.";
    }
    public static function produtoAtualizarErro(){
        return "O produto não foi excluido. Tente novamente.";
    }
    
    public static function produtoExcluir($nome){
        return "O produto <b>$nome</b>  foi excluido.";
    }
    public static function produtoExcluirErro(){
        return "O produto não foi excluido. Tente novamente.";
    }
    
}
