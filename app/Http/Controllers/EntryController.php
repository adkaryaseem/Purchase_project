<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Product;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Entry::with([
            "product"
        ])->get();
        return view("entry.index", compact("entries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::all();
        return view ("entry.create", compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Entry::create([
            "date"=>$request->date,
            "quantity"=>$request->quantity,
            "rate"=>$request->rate,
            "product_id"=>$request->product
        ]);
        return redirect()->route("entry.index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Entry::where([
            "date"=>$id->date,
            "quantity"=>$id->quantity,
            "rate"=>$id->rate,
            "product_id"=>$id->product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
