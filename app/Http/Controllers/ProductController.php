<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    // Get all products from the database
    $products = \App\Models\Product::all();

    // Return the 'shop' view with the products data
    return view('shop', compact('products'));
}
}
