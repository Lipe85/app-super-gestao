<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos(){
        //return $this->belongsToMany('App\Produto', 'pedidos_produtos');

        return $this->belongsToMany('App\Item', 'pedidos_produtos', 'pedido_id', 'produto_id')->withPivot('id', 'created_at', 'updated_at');

        /*
            1º Modelo de relação NxN em relação ao modelo que stamos implementando;
            2º Tabela auxiliar que armazena os registros de relacionamento;
            3º Representa o nome da FK da tabela mapeada pelo modelo na tabela de relacionamento;
            4º Representa o nome da FK da tabela mapeada pelo modelo utilizado no relacionamento que estamos implementando.
        */

    }
}
