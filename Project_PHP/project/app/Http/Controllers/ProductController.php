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
        //$shoes = DB::table('products')->get();
        $products = Product::where('category_id','=', '1')->get();
        return view('products.index', ['products' => $products]);
       // return $products;
    }

    public function men()
    {
        $products = Product::where('category_id','=', '2')->get();
        return view('products.index', ['products' => $products]);

    }

 /*   public function productsBySubcategory($subcategory)
    {
        $subcategory = Subcategory::findOrFail($subcategory);
        $products = $subcategory->products()->paginate(2);; //paginate(2)-na stronie wyswietlamy 2 elementy
        $category_name = $subcategory->category->name;
        //return view('products.productFromSubcategory', ['products'=>$products, 'category_name'=>$category_name, 'subcategory_name'=>$subcategory->name]);
        return view('products.productFromSubcategory')->withProducts(Product::all());
    }
    public function search(Request $request) {
        $category_id = ($request->category_id) ? $request->category_id : 0;
        if ($category_id) {

            $products = Product::where('category_id','=', $category_id)
                ->where(function ($query) use ($request) {
                    $query->where('brand', 'like', '%' . $request->search . '%')
                        ->orWhere('model', 'like', '%' . $request->search . '%');

                })->paginate(3);


        } else {
            $products = Product::where('brand', 'like', '%' . $request->search . '%')
                ->orWhere('model', 'like', '%' . $request->search . '%')->paginate(3);
        }
        $products->withPath('?category_id='. $category_id . '&search='.$request->search);

        return view('products.search', ['products'=>$products]);

    }*/


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {

        return view('products.show')->withProduct($product);
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
