<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category(){
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){
        $data = new category;
        $data-> category_name = $request->category;
        $data-> save();
        return redirect()->back()->with(' message' , 'Category added successfully' );

    }

    public function delete_category($id){
        $data=category::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function view_product(){
        $category=  category::all();
        return view('admin.product', compact('category'));
}

public function add_product(Request $request){
    $product= new product;
    $product->title=$request->title;
    $product->description=$request->description;
    $product->category=$request->category;
    $product->quantity=$request->quantity;
    $product->price=$request->price;
    $product->discount_price=$request->discount_price;

    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);

    $product->image=$imagename;

    $product->save();
    return redirect()->back();
}

public function show_product(){
    $product=product::all();
    return view('admin.show_product',compact('product'));
}

public function delete_product($id){
    $data=product::find($id);
    $data->delete();
    return redirect()->back();

}

public function update_product($id){
    $product=product::find($id);
    $category=category::all();
    return view('admin.update_product',compact('product','category'));
}

public function update_product_confirm(Request $request, $id){
    $product=product::find($id);
    $product->title=$request->title;
    $product->description=$request->description;
    $product->category=$request->category;
    $product->quantity=$request->quantity;
    $product->price=$request->price;
    $product->discount_price=$request->discount_price;

    $image=$request->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
    
        $product->image=$imagename;
    }
    $product->save();
    return redirect()->back();
}

}
