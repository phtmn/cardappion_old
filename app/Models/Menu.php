<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use TenantTrait;

    protected $fillable = ['tenant_id','user_id','description','active'];

    public function products(){

        return $this->belongsToMany(Product::class);
    }
}
