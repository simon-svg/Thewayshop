<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\Header;
use App\Models\Home;
use App\Models\Team;

class PagesController extends Controller
{
    public $data;
    public $homeSlide;
    public $teamData;

    public function setData($data){
        $this->data = $data;
    }
    public function setHomeSlide($homeSlide){
        $this->homeSlide = $homeSlide;
    }
    public function setTeamData($teamData){
        $this->teamData = $teamData;
    }
    
    public function __construct(){
        $all = Header::headers();
        $this->setData($all);

        $team = Team::get();
        $this->setTeamData($team);
    }


    public function home(){
        $homeSlide = Home::get();
        $this->setHomeSlide($homeSlide);
        return view('index', [
            'data' => $this->data,
            'homeSlide' => $this->homeSlide
        ]);
    }
    public function about(){
        return view('about', [
            'data' => $this->data,
            'team' => $this->teamData
        ]);
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
        return view('service', [
            'data' => $this->data,
            'team' => $this->teamData
    ]);
    }
    public function contact(){
        return view('contact', ['data' => $this->data]);
    }
    public function myAccount(){
        return view('my-account', ['data' => $this->data]);
    }
}
