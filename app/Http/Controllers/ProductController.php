<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =Product::all();
        return view('products.index',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', [
        'categories'=>Category::all()
      
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|unique:categories|max:225',
        ]);

        Product::create([
            'name' =>$request->name,
            'category_id' =>$request->category_id,
            'description' =>$request->description,
            'price' =>$request->price,
            'quantity' =>$request->quantity,
          
            
        ]);
        return redirect()->route('products.index')->with('success',"Categorie ajoutée avec succes ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $product =Product::find($id);
        return view('products.show',[
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product =Product::find($id);
        return view('products.edit',[
            'product' => $product,
             'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $request->validate([
            'name' => 'required|max:225',
        ]);

       Product::find($id)->update([
        'name'=>$request->name,
        'category_id' =>$request->category_id,
        'description'=>$request->description,
        'price'=>$request->price,
        'quantity'=>$request->quantity,


       ]);
       return back()->with('success',"categorie ajoutée avec succés");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
      Product::find($id)->delete();
      return redirect()->route('products.index')->with('success',"categorie supprimée  avec success");
    }
    }
}
