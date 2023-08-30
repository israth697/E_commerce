<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category () {

        $category = Category::paginate(5);
        return view('backend.pages.Category.category',compact('category'));
     }

     public function category_form(){
        return view('backend.pages.Category.category_form')->with('message','Data added successfully !!!');
     }

     public function category_search(){
      

        
         // $request->validate([
         //     'name'=>'required',
         //     'image'=>'required',
         //     'description'=>'required',
             
         // ]); 
         
         
         //  dd($request->all());
         Category::create([
             // database column name=>$request->input field name
            //  'name'=>$request->name,
            //  'description'=>$request->description,
            //  'image'=>$fileName,
             
             
         
         ]);
         return to_route('category.list')->with('msg','Data store Successfully');
 
     }
     }

