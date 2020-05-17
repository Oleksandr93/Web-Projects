<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products');
    }

    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {

    }
}
