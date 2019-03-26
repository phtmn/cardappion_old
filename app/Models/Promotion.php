<?php

namespace App\Models;


use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;


class Promotion extends Model
{
    use TenantTrait;

    protected $fillable = ['description','start_date','end_date','img','promotion_value','tenant_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
