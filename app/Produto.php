<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];
 
    public function produtoDetelhe(){
        return $this->hasOne('App\ProdutoDetalhe');

        //Produto tem um produto_detalhe (fk) -> produto_id
        //produtos (pk) -> id
    }
}
