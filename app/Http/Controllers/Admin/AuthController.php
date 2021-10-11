<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'login' => ['required', 'min:4', 'max:10'],
            'password' => ['required', 'confirmed', 'min:4']
        ]);
        $user = User::create([
            'name' => $data['name'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'login' => $data['login'],
            'password' => bcrypt($data['password'])
        ]);
        if($user){
            auth('web')->login($user);
        }
        return redirect(route('home'));
    }





    public function login(Request $request){
        $data = $request->validate([
            'login' => ['required', 'min:4', 'max:10'],
            'password' => ['required', 'min:4']
        ]);

        if(auth('web')->attempt($data)){
            return redirect(route('home'));
        }
        else{
            return redirect(route('login'))->withErrors(['login' => "login or password is incorrect"]);
        }
    }






    public function logout(){
        auth("web")->logout();
        return redirect(route('home'));
    }
}
