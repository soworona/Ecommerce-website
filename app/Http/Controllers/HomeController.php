<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        
        if($usertype=="1")
        {
            return view('admin.home');
        }
        else{
            $product = product::paginate(5);
        return view('home.userpage',compact('product'));
        }
    }

    public function index(){
        $product = product::paginate(5);
        return view('home.userpage',compact('product'));
    }

    public function product_details($id){
        $product=product::find($id);
        
        return view('home.product_details',compact('product'));
    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $user=Auth::user();
            $product=product::find($id);
            $cart= new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->name=$product->name;
            $cart->quantity=$request->quantity;

            if($product->discount_price!=null){
                $cart->price=$product->discount_price * $request->quantity;
            }
            else{
                $cart->price=$product->price * $request->quantity;
            }

            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->user_id=$user->id;
        }
        else{
            return redirect('login');
        }
        $cart->save();
        return redirect()->back();
    }

    public function show_cart(){
        if(Auth::id()){
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.show_cart',compact('cart'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function make_order(){
        return back()->with('message','Order has been placed.');
    }
}
