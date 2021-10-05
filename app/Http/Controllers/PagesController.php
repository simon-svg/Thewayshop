<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\Header;

class PagesController extends Controller
{
    public $data;

    public function setData($data){
        $this->data = $data;
    }
    
    public function __construct(){
        $all = Header::headers();
        $this->setData($all);
    }


    public function home(){
        return view('index', ['data' => $this->data]);
    }
    public function about(){
        return view('about', ['data' => $this->data]);
    }
    public function shop(){
        return view('shop', ['data' => $this->data]);
    }
    public function cart(){
        return view('cart', ['data' => $this->data]);
    }
    public function checkout(){
        return view('checkout', ['data' => $this->data]);
    }
    public function shopDetail(){
        return view('shopDetail', ['data' => $this->data]);
    }
    public function service(){
        return view('service', ['data' => $this->data]);
    }
    public function contact(){
        return view('contact', ['data' => $this->data]);
    }
    public function myAccount(){
        return view('my-account', ['data' => $this->data]);
    }
}
