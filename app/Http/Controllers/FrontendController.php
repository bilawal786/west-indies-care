<?php

namespace App\Http\Controllers;

use App\Product;
use App\Website;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $content = Website::find(1);
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact('content', 'products'));
    }
    public function contact(){
        $content = Website::find(1);
        return view('front.contact', compact('content'));
    }
    public function product($id){
        $product = Product::find($id);
        return view('front.product', compact('product'));
    }
    public function admin(){
        return view('auth.admin');
    }
    public function checkout(){
        return view('front.checkout');
    }
    public function addtocart(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        \Cart::add($product->id, $product->title, $product->price, $request->quantity);
        return redirect()->route('cartitems');
    }
    public function cartitems(){
        $cartitems = \Cart::getContent();
        return view('front.cart', compact('cartitems'));
    }
    public function removecart(Request $request){
        \Cart::remove($request->id);
        return redirect()->back();
    }
}
