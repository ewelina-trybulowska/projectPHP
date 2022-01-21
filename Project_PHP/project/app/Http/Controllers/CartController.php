<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index(){
        if(Auth::id()){
        $cart = User::find(Auth::id())->cart;
        $products=Cart::find($cart->id)->products;
    }
        else {
            $cart=Cart::find(1);
            $products=Cart::find(1)->products;
        }

        return view('carts.index', ['cart'=>$cart, 'products'=>$products]);

    }

    public function store(Request $request, $cart)
    {

    }

    public function addProductToCart($product, $quantity){
        if(Auth::id()) $cart = User::find(Auth::id())->cart;
        else $cart=Cart::find(1);

        if($cart->products->contains($product->id)){
            $product->pivot->total_product_price+=($product->price)*$quantity;
            $product->pivot->total_product_amount+=$quantity;
        }
        else{
            $cart->products()->attach($product->id, ['total_product_price' => ($product->price)*$quantity, 'total_product_amount' => $quantity]);
        }

        $cart->total_amount+=$quantity;
        $cart->total_price+=($product->price)*$quantity;
        $products=Cart::find($cart->id)->products;
        return view('carts.index', ['cart'=>$cart, 'products'=>$products]);
    }

    public function deleteProductFromCart($product_id){
        $cart = User::find(Auth::id())->cart;
        $cart->products()->detach($product_id);
    }

    public function show($cart)
    {
        $products=Cart::find($cart)->products;

        if(!count($products)){
            return Redirect::back()->withErrors(['msg'=>"You have empty cards! Back to main website to buy something! :)"]);
        }
        else{

            return view("carts.show");
        }

    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, Cart $cart)
    {

            if (!strcmp($request->discount, "WINTER")) {
                $cart->total_price = $cart->total_price * 0.2;
                $cart->save();
                return redirect()->route('carts.index', ['cart' => $cart])->with('success', 'DISCOUNT CODE ACCEPTED :)');;
            } else {

                return Redirect::back()->withErrors(['msg' => "This code is invalid"]);
            }
    }


    public function destroy($id)
    {
        //
    }
}
