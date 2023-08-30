<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdController extends Controller
{
    public function product () {
 
        return view ('backend.pages.Product.product');
}
}
