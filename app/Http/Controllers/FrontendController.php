<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use App\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $content = Website::find(1);
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact('content', 'products'));
    }
    public function products(){
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('front.products', compact('products'));
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
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        $user = Auth::user();
        if(isset($total)){
            \Stripe\Stripe::setApiKey (env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.checkout', compact('cartitems', 'cartTotalQuantity', 'total', 'user', 'intent'));
    }
    public function addtocart(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        \Cart::add($product->id, $product->title, $product->price, $request->quantity);
        return redirect()->route('cartitems');
    }
    public function cartitems(){
        $cartitems = \Cart::getContent();
        $cartTotalQuantity = \Cart::getTotalQuantity();
        $total = \Cart::getTotal();
        return view('front.cart', compact('cartitems', 'cartTotalQuantity', 'total'));
    }
    public function removecart(Request $request){
        \Cart::remove($request->id);
        return redirect()->back();
    }
    public function userDashboard(){
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->where('paymentstatus', '1')->get();
        return view('user.dashboard', compact('user', 'orders'));
    }
    public function profileupdate(Request $request){
        $id = Auth::user();
        $user = User::where('id', $id->id)->first();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;

        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'profile' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profile/';
            $image1->move($destinationPath, $name);
            $user->image = 'profile/' . $name;
        }

        if ($request->oldpassword){
            $oldpass = $request->oldpassword;
            $pass = $user->password;
            if (Hash::check($oldpass , $pass)) {
                $user->password = Hash::make($request->newpassword);
                $user->save();
                Auth::logout();
                $notification = array(
                    'messege'=>'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type'=>'success'
                );
                return Redirect()->route('login')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Lancien mot de passe ne correspond pas!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }


        $user->update();

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function checkoutSubmit(Request $request){
        $cartitems = \Cart::getContent();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->postal = $request->postal;
        $order->products = $cartitems;

        $order->order_number = "ON-".rand(100000000, 900000000);
        $order->save();

        return $this->paymentsuccess($order->id,'order');
    }
    public function paymentsuccess($id, $type){
        $order = Order::find($id);
        $order->paymentstatus = '1';
        $order->update();

        foreach(json_decode($order->products) as $item){
            $product = Product::find($item->id);
            if ($product){
                $product->quantity = $product->quantity - $item->quantity;
                $product->update();
            }

        }

        \Cart::clear();
        return view('front.paymentsuccess', compact('order'));
    }
    public function orderDetails($id){
        $order = Order::where('id', $id)->first();
        return view('user.orderdetails', compact('order'));
    }
}
