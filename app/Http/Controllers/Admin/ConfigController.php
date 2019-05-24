<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;

class ConfigController extends Controller
{

    public function createEdit(){

        $config = auth()->user()->config();
        if($config){
            return view('admin.config.edit',[
                'config' => $config
            ]);
        }else{
            return view('admin.config.create');
        }

    }

    public function store(Request $request){

        $config = Config::UpdateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'nome'      => $request->nome,
                'cnpj'      => $request->cnpj,
                'cep'       => $request->cep,
                'endereco'  => $request->endereco,
                'bairro'    => $request->bairro,
                'numero'    => $request->numero,
                'cidade'    => $request->cidade,
                'estado'    => $request->estado,
                'telefone'  => $request->telefone,
                'whatsapp'  => $request->whatsapp,
                'site'      => $request->site,
                'fanpage'   => $request->fanpage,
                'instagram' => $request->instagram,                
                'user_id'   => auth()->user()->id
            ]
        );

        if($config){
            return redirect()->route('dashboard.index')->with('msg','Dados armazenados com sucesso!');
        }
    }
}
