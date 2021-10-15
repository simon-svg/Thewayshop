<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
    public function ru(){
        App::setLocale('ru');
        return redirect()->back();
    }


    public function en(){
        App::setLocale('en');
        return redirect()->back();
    }
}
