<?php

namespace App\Http\Controllers;
use App\Models\Cartdata;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function index(){
        if (Session()->has('u_id') or Session()->has('id')){
            $u_id = Session()->get('u_id')?Session()->get('u_id'):Session()->get('id');
            $products=Products::all();
            $cartdata=Cartdata::all();
            $p_id_array = (array) null;
            foreach($cartdata as $cartquerry){
                if($cartquerry->u_id == $u_id){
                    array_push($p_id_array,$cartquerry->p_id);
                }
            }

            $products_array = (array) null;
            foreach($p_id_array as $pid){
                foreach($products as $product){
                    if ($product->p_id == $pid){
                        array_push($products_array, $product);
                    }
                }
            }

            // echo "<pre>";
            // print_r($products_array);

            $array = [
                'products_array' => $products_array
            ];
            $data=compact('array');
            return view('cart')->with($data);
        }
        return redirect('login');
    }
    public function add_cart(Request $req){
        if (Session()->has('u_id') or Session()->has('id')){
            // $session = Session();
            // $value = ;
            // echo Session()->get('u_id');
            // print_r($value);
            $cart = new Cartdata;
            $cart->p_id =  $req['p_id'];
            $cart->u_id =  Session()->get('u_id')?Session()->get('u_id'):Session()->get('id');
            $cart->save();
            return redirect('shoping');
        }
        return view('login');
    }
}
