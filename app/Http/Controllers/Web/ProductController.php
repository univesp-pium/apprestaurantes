<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('quantity', '>', 0)->where('active', true)->get();
        $categories = Category::where('active', true)->get();

        return view('web.products.index', compact('products', 'categories'));
    }

    public function show($product_slug)
    {

        $product = Product::where('slug', $product_slug)->with('unit')->first();

        if (!$product) {
            return redirect()->route('products.index');
        }
        
        return view('web.products.show', compact('product'));
    }
}
