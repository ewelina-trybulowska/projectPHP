<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

    }
    public function women()
    {
        //$products = Product::ofType('Women')->Available()->get();  // wersja z tym, że usuwamy gdy amount=0

        $products = Product::ofType('Women')->whereHas('shelves', function($query){ // wersja z tym, że sprawdzamy czy amount>0
            $query->where('amount','>',0);
        })->get();
        return view('products.index', ['products' => $products]);
    }

    public function men()
    {
        //$products = Product::ofType('Men')->Available()->get();
        $products = Product::ofType('Men')->whereHas('shelves', function($query){
            $query->where('amount','>',0);
        })->get();
        return view('products.index', ['products' => $products]);

    }

    public function search(Request $request){

        //DZIALALO BEZ TYCH POLEK... - TERAZ ROZMIAR SIE ROZWALIL.

      /* $products=Product::where('category_id','=', '1')
            ->where( 'brand', 'LIKE', '%' . $request->brand . '%' )
            ->where('type', 'LIKE', '%' . $request->type . '%' )
            ->where('size', 'LIKE', '%' . $request->size . '%' )->get();

        return $products;*/

        $products1=Product::where('category_id','=', '1')
            ->where( 'brand', 'LIKE', '%' . $request->brand . '%' )
            ->where('type', 'LIKE', '%' . $request->type . '%' );

        $products2 = Product::ofType('Women')->
        whereHas('shelves', function($query) use ($request) {
              $query->where('size', 'LIKE', '%' . $request->size . '%' );});

        $result=$products1->join($products2, 'id', '=', 'id')->get();

       /* foreach ($products1 as $p){
            echo $p->id;
        }*/

        return $result;
    }

    public function show(Product $product)
    {
        return view('products.show')->withProduct($product);
    }


}
