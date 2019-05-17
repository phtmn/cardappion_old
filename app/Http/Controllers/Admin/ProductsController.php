<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){

        return view('admin.products.index',[
            'data' => $data = Product::all()
        ]);
    }

    public function create(){

        return view('admin.products.create',[
            'menus' => Menu::all()
        ]);
    }

    public function store(Request $request){

        try{
            $product = $request->all();

            if($request->hasFile('img')){
                $product['image'] = $request->img->store('products','public');
            }

            Product::create($product);

            return redirect()->back()->with('msg','Produto Inserido Com Sucesso!');
        }catch (\Exception $e){
            return redirect()->back()->with('error','Ocorreu um Erro: '.$e->getMessage());
        }



    }
}
