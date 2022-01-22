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

    public function store(Request $request, Product $product) //add product to cart
    {
        if(Auth::id()) $cart = User::find(Auth::id())->cart;
        else $cart=Cart::find(1);

        $qty=$request->quantity;

        if($cart->products->contains($product->id)){
            $tpp=$product->pivot->total_product_price+($product->price)*$qty;
            $tpa=$product->pivot->total_product_amount+$qty;
            $cart->products()->updateExistingPivot($product->id, ['total_product_price' => $tpp, 'total_product_amount' => $tpa]);
        }
        else{
            $cart->products()->attach($product->id, ['total_product_price' => ($product->price)*$qty, 'total_product_amount' => $qty]);
        }

        $cart->total_price+=($product->price)*$qty;
        $cart->total_amount+=$qty;
        $cart->save();
        $product->save();
        $products=Cart::find($cart->id)->products;
        return redirect()->route('carts.index', ['cart' => $cart, 'products'=>$products]);
    }

    public function edit(Product $product){ //delete product from cart
        if(Auth::id()) $cart = User::find(Auth::id())->cart;
        else $cart=Cart::find(1);
        $cart->products()->detach($product->id);

        $products=Cart::find($cart->id)->products;
        //$cart->total_amount-=$product->pivot->total_product_amount;
        //$cart->total_price-=$product->pivot->total_product_price;
        $cart->save();
        $products=Cart::find($cart->id)->products;
        return redirect()->route('carts.index', ['cart' => $cart, 'products'=>$products]);
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
