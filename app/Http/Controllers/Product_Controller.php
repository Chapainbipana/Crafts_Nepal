<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;

class Product_Controller extends Controller
{
    public function index(){
        return view('product.display');
    }
    
    public function showform(){
        $category=ProductCategory::all();
        dd($category);
       // return view('product.addproduct',compact('category'));

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $originalImageName = null;
    
        if ($request->file('image')) {
            $originalImageName = $request->file('image')->getClientOriginalName();        
            $imagePath = $request->file('image')->storeAs('images', $originalImageName, 'public');
        }
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $originalImageName,
        ]);
       return redirect()->route('products.show');

    }
    public function show($id)
    {
       $product = Product::findOrFail($id);
     return view('product-detail', compact('product'));
    }
    public function storeProduct(){
        
    }
    
}
