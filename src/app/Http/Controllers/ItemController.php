<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Product;

class ItemController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}
