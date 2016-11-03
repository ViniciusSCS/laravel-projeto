<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    
    public $timestamps = false;
    
    protected $fillable = array('idCategoria', 'nome', 'descricao', 'quantidade', 'valor');//5.0
    
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }
    
}
