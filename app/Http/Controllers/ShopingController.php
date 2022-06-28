<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ShopingController extends Controller
{
    public function products_list(Request $req){
        $products=Products::all();
        $data = compact('products');
        return view('shoping')->with($data);
    }
}
