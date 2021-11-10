<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function products(){
        $products = Product::all();
        return response()->json($products);
    }
}
