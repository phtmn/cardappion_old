<?php

namespace App\Models;


use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use TenantTrait;

    protected $fillable = ['user_id','tenant_id','store_name','slogan','description','category','email','site','instagram',
        'facebook','maps','address','city','has_delivery','delivery_phone','banner','logo'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
