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
        $menu = Menu::withoutGlobalScopes([TenantScope::class])->where('slug','=',$slug)->first();
        //dd($menu);
        return view('client.menu', [
            'menu' => $menu

        ]);
    }
}
