<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        if(Auth::id()){
        $cart = User::find(Auth::id())->cart;
        $products=Cart::find($cart->id)->products;
    }

        return view('carts.index', ['cart'=>$cart, 'products'=>$products]);

    }

    public function store(Request $request, $cart)
    {

    }

    public function addProductToCart($product_id){
        $product = Product::find($product_id);
        $cart = User::find(Auth::id())->cart;
        $cart->products()->attach($product_id, ['total_product_price' => 300, 'total_product_amount' => 1]);
        $cart->total_amount+=1;
        $cart->total_price+=$product->price;
    }

    public function deleteProductFromCart($product_id){
        $cart = User::find(Auth::id())->cart;
        $cart->products()->detach($product_id);
    }

    public function show($cart)
    {
        return view("carts.show");
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
