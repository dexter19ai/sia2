<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index() {
        // Fetch all products from DB
        $products = Product::all(); 
        
        // Return view and pass the products data
        return view('products.index', compact('products'));
    }
}
