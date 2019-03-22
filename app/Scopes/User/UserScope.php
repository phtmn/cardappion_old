<?php

namespace App\Scopes\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class UserScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $user = auth()->user()->id;
        $builder->where('user_id',$user);
    }

}