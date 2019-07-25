<?php

namespace App\Models;


use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use TenantTrait;

    protected $fillable = ['user_id','tenant_id','name','docnumber','zipcode'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
