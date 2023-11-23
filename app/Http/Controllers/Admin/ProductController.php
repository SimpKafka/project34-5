<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return view(
            'admin.product.index',
            [
                'products' => Product::all(),
            ]
        );
    }

    public function createform()
    {
        return view('admin.product.create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            "name" => ["required", "string"]
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('p.index');
    }

    public function edit($product_id){
        $product = Product::find($product_id);
        return view('admin.product.updateform',compact('product'));
    }

    public function update(Request $request, $product_id){
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->price;
        $product->update();
        return redirect()->route('p.index');
    }

    public function delete($product_id){
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('p.index');
    }


}
