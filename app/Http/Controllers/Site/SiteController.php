<?php

namespace App\Http\Controllers\Site;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home(){
        return view('site.index');
    }

    public function promocao($id){

        $id         = decrypt($id);
        $promocao   = Promotion::find($id);

        return view('site.promocao.show',[
            'promotion' => $promocao
        ]);
    }
}
