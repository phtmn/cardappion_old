<?php

namespace App\Http\Controllers\Site;

use App\Models\Menu;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home(){
        //return view('site.index');
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
        $menu = Menu::where('slug','=',$slug)->first();
        return view('client.menu', compact('menu'));
    }
}
