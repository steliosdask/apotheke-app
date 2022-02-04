<?php
/*
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function insertproduct(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'baracode'=>'required',
            'wholesale_price'=>'required'
            ]);


        $product = new Product;
        $product -> name = $request -> name;
        $product -> barcode = $request -> barcode;
        $product -> wholesale_price = $request -> wholesale_price;
        $product -> retail_price = $request -> retail_price;
        $product -> supplier = $request -> supplier;
        $product -> category = $request -> category;
        $product -> vat = $request -> vat;
        $product -> save();

        return response()->json(['message'=>'You are done'], 200);
    }



    public function index()
    {
        $products = Product::all();
        return response()->json(['products'=>$products], 200);
    }

    public function info($id)
    {
        $products = Product::find($id);
        return response()->json(['products'=>$products], 200);
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return response()->json(['products'=>$products], 200);
    }
    
    public function change($id)
    {
        $product = Product::find($id);
        $product -> name = 'makaronia';
        $product -> barcode = '2133334';
        $product -> wholesale_price = '10000.4';
        $product -> retail_price = '100005.4';
        $product -> supplier = 'me kimaaaa';
        $product -> category = 'mplampla';
        $product -> vat = '6.0';
        $product -> save();

        return response()->json(['message'=>'You are done'], 200);
    }

}*/
