<?php

namespace App\Http\Controllers\Site;

use App\Models\Menu;
use App\Models\Promotion;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home(){
        return view('layouts.home');
    }

    public function promocao($slug){
        $promotion = Promotion::where('slug','=',$slug)->first();
        return view('client.promotion', compact('promotion'));
    }

    public function menu($slug)
    {
        $menu = Menu::where('slug','=',$slug)->first();
        return view('client.menu',compact('menu'));

    }
}
