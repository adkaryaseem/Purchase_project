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
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entry = Entry::where('id','=',$id)->first();
        $products = Product::all();
        return view('entry.edit',compact('entry','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Entry::where("id","=",$id)->update([
            "date"=>$request->date,
            "quantity"=>$request->quantity,
            "rate"=>$request->rate,
            "product_id"=>$request->product
        ]);
        return redirect()->route("entry.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Entry::where("id", "=",$id)->delete();
        return redirect()->route('entry.index');
    }

    /**
     * Search the specified data
     */

    public function search(Request $request)
    {
       $entries = Entry::where("id", "=",$request->search)->get();
        return view("entry.index",compact('entries'));
    }
}


