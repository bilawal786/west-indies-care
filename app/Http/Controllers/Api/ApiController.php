<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function products(){
        $products = Product::all();
        return response()->json($products);
    }
    public function product($id){
        $product = Product::find($id);
        return response()->json($product);
    }
    public function order(Request $request){
        $validator=$request->validate([
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        $user = new User();
        $user->fname = $request->fname;
        $user->role = 2;
        $user->website = $request->website;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make(12345678);
        $user->save();

        $order = new Order();
        $order->user_id = $user->id;
        $order->fname = $request->cfname;
        $order->lname = $request->clname;
        $order->email = $request->cemail;
        $order->phone = $request->cphone;
        $order->address = $request->caddress;
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->postal = $request->postal;
        $order->products = $request->cartitems;
        $order->website = $request->website;
        $order->paymentstatus = '1';
        $order->order_number = "ON-".rand(100000000, 900000000);
        $order->save();
        return response()->json(['success' => 'Success']);
    }
}
