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
                'store_name'    => $request->store_name,
                'slogan'        => $request->slogan,
                'description'   => $request->description,
                'category'      => $request->category,
                'email'         => $request->email,
                'site'          => $request->site,
                'instagram'     => $request->instagram,
                'facebook'      => $request->facebook,
                'maps'          => $request->maps,
                'address'       => $request->address,
                'city'          => $request->city,
                'has_delivery'  => $request->has_delivery,
                'delivery_phone'=> $request->delivery_phone,
                'banner'        => $request->banner,
                'logo'          => $request->logo,
                'user_id'       => auth()->user()->id
            ]
        );

        if($config){
            return redirect()->route('dashboard.index')->with('msg','Seus dados foram atualizados');
        }
    }
}
