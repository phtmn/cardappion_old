<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $fillable = ['descricao','valor_promocional','data_inicio','data_final','foto','user_id'];
}
