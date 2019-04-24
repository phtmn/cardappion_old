<?php

namespace App\Http\Controllers\Site;

use App\Scopes\Tenant\TenantScope;
use DB;
use App\Models\Menu;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home(){
        return view('layouts.home');
    }

    public function promocao($id){

        $id         = decrypt($id);
        $promocao   = DB::table('promotions')->find($id);

        return view('site.promocao.show',[
            'promotion' => $promocao
        ]);
    }

    public function menu($slug)
    {
        $menu = Menu::withoutGlobalScopes()->where('slug','=',$slug)->first();
        return view('client.menu', compact('menu'));
    }
}
