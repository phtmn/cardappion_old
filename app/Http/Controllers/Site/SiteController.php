<?php

namespace App\Http\Controllers\Site;

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
}
