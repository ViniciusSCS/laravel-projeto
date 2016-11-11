<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $primaryKey = 'idCategoria';
    
    public $timestamps = false;
    
    protected $fillable = array('nome');//5.0

}
