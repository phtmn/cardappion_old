<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TenantTrait;

    protected $fillable = ['tenant_id','description','price','image','details','active'];


    public function menus(){

        return $this->belongsToMany(Menu::class);
    }
}
