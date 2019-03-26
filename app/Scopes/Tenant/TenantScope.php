<?php
/**
 * Created by PhpStorm.
 * User: matthaus
 * Date: 26/03/19
 * Time: 10:55
 */

namespace App\Scopes\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $tenant = app(ManagerTenant::class)->getTenantIdentify();
        $builder->where('tenant_id',$tenant);
    }

}