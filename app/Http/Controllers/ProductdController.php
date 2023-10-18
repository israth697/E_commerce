<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductdController extends Controller
{
    public function product () {
        $product = Product::paginate(5);
        return view('backend.pages.Product.product',compact('product'));
    }

    public function product_form(){
        return view('backend.pages.Product.product_form');
    }

    public function product_store (Request $request) {

        
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            
        ]); 
        
        $fileName = null;
        if($request->hasFile('image'))

        {

            $fileName =date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);

            
        } 
        //  dd($request->all());
        Product::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,
            
            
        
        ]);
        return to_route('product.list')->with('msg','Data store Successfully');

    }

   

}
