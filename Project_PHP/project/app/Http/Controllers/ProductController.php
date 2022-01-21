<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function search(Request $request, $category){

        $products = Product::ofType(ucfirst($category))->whereHas('shelves',function($query) use ($request){
            $query->where('size',$request->size)
                ->where('brand',$request->brand)
                ->where('type',$request->type);
        })->get();
        return view('products.search', ['products' => $products]);

    }

    public function show(Product $product)
    {
        return view('products.show')->withProduct($product);
    }
    public function store(){


    }

}
