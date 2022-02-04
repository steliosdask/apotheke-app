<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ResourceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function index()
    {
        $products = Product::all();
        return response()->json(['products'=>$products], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $product -> category = $request -> category;
        $product -> vat = $request -> vat;
        $product -> save();

        return response()->json(['message'=>'You are done'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return response()->json(['products'=>$products], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product -> name = $request -> name;
        $product -> barcode = $request -> barcode;
        $product -> wholesale_price = $request -> wholesale_price;
        $product -> retail_price = $request -> retail_price;
        $product -> category = $request -> category;
        $product -> vat = $request -> vat;
        $product -> save();

        return response()->json(['message'=>'You are done'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return response()->json(['products'=>$products], 200);
    }
}
