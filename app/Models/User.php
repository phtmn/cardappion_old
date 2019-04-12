<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function promotions(){
        return $this->hasMany(Promotion::class);
    }

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function config(){
        return $this->hasOne(Config::class)->first();
    }




}
