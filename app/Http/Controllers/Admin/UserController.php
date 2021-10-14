<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public $data;

    public function setData($data){
        $this->data = $data;
    }

    public function __construct(){
        $data = User::get();
        $this->setData($data);
    }



    public function user(){
        return view('admin.user.user', ['data' => $this->data]);
    }



    public function add(){
        return view('admin.user.insert');
    }



    public function insert(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'login' => ['required', 'min:4'],
            'password' => ['required', 'min:4']
        ]);
        User::insert([
            'name' => $data['name'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'role' => $request->role,
            'login' => $data['login'],
            'password' => bcrypt($data['password'])
        ]);
        return redirect(route('admin.users.view'));
    }




    public function delete($id){
        $item = User::findorFail($id);
        $item->delete();
        return redirect(route('admin.users.view'));
    }




    public function update($id){
        $item = User::findorFail($id);
        return view('admin.user.update', [
            'id' => $item['id'],
            'name' => $item['name'],
            'lastName' => $item['last_name'],
            'email' => $item['email'],
            'role' => $item['role'],
            'login' => $item['login']
        ]);
    }




    public function updateForm(Request $request){
        $item = User::findorFail($request->id);
        $data = $request->validate([
            'name' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'login' => ['required', 'min:4']
        ]);
        
        $item->update([
            'name' => $data['name'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'role' => $request->role,
            'login' => $data['login']
        ]);
        dd($item);
        return redirect(route('admin.users.view'));
    }
}
