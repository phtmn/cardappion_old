<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{


    public function cardapios(){
        return $this->belongsToMany(Cardapio::class, 'cardapios_produtos');
    }
}
