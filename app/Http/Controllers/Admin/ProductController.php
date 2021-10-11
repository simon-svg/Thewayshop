<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('admin.product.product');
    }
    public function add(){
        return view('admin.product.insert');
    }


    public function insert(Request $request){
        dd($request);
    }
}
