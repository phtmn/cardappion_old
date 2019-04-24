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

        return view('admin.promocoes.qrcode',compact('promocao'));
    }

    public function store(Request $request){

        $request->user()->promotions()
                        ->create($request->all());

        return redirect()->route('promotions.index');
    }
}
