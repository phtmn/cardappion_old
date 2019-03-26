<?php
/**
 * Created by PhpStorm.
 * User: matthaus
 * Date: 26/03/19
 * Time: 11:20
 */

namespace App\Tenant\Traits;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;


trait TenantTrait

{
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::addGlobalScope(new TenantScope);

        static::observe(new TenantObserver);
    }

}