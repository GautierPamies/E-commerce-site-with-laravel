<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()
        ->whereActive(true)
        ->take(16)
        ->get();

        return view('products.index', compact('products'));
    }
}
