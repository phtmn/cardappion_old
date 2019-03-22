<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{

    public function produtos(){
        return $this->belongsToMany(Produto::class,'cardapios_produtos');
    }
}
