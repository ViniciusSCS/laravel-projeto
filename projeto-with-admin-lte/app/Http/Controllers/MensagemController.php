<?php

namespace App\Http\Controllers;

class MensagemController extends Controller {
    
    public static function msgProdutoInserir($nome){
        return "O produto <b>$nome</b>  foi cadastrado.";
    }
    public static function msgProdutoInserirErro(){
        return "O produto não foi cadastrado. Tente novamente.";
    }
    
    public static function msgCategoriaInserir($nome){
        return "A categoria <b>$nome</b>  foi cadastrada.";
    }
    public static function msgCategoriaInserirErro(){
        return "A Categoria não foi cadastrada. Tente novamente.";
    }
    
    public static function msgProdutoAtualizar($nome){
        return "O produto <b>$nome</b>  foi atualizado.";
    }
    public static function msgProdutoAtualizarErro(){
        return "O produto não foi excluido. Tente novamente.";
    }
    
    public static function msgProdutoExcluir($nome){
        return "O produto <b>$nome</b>  foi excluido.";
    }
    public static function msgProdutoExcluirErro(){
        return "O produto não foi excluido. Tente novamente.";
    }
    
}
