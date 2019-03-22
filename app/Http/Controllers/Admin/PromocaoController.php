<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promocao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromocaoController extends Controller
{
    public function index(){

        return view('admin.promocoes.index',[
            'data' => $data = Promocao::all()
        ]);
    }


    public function qrCode($id){

        $promocao = Promocao::find($id);
        $promocao_code = encrypt($promocao->id);
        $url = env('APP_URL').'/promocao/code/';

        return view('admin.promocoes.qrcode',[
              'promocao_code' => $promocao_code,
              'url'     => $url
        ]);
    }

    public function store(Request $request){

        Promocao::create($request->all());
        return redirect()->route('promocao.index');
    }
}
