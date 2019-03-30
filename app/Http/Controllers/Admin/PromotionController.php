<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    public function index(){

        return view('admin.promocoes.index',[
            'data' => $data = Promotion::all()
        ]);
    }


    public function qrCode($id){

        $promocao = Promotion::find($id);
        $promocao_code = encrypt($promocao->id);
        $url = env('APP_URL').'/promocao/code/';

        return view('admin.promocoes.qrcode',[
              'promocao_code' => $promocao_code,
              'url'     => $url
        ]);
    }

    public function store(Request $request){

        $request->user()->promotions()
                        ->create($request->all());

        return redirect()->route('promotions.index');
    }
}
