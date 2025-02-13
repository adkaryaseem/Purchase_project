<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "image"=>"nullable"
        ]);

        Product::create([
            "name"=>$request['name'],
            "image"=>$request['image'] ?? null
        ]);
        return redirect()->route("product.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::where("id","=",$id)->first();
        // dd($product);
        return view('product.edit',compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all(),$id);
        Product::where("id","=",$id)->update([
            "name"=>$request->name,
        ]);
        return redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete( $id )
    {
        Product::where("id","=",$id)->delete();
        return redirect()->route("product.index");
    }
}
