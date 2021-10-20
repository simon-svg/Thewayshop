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
        $data = User::paginate(10);
        $this->setData($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.user', ['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findorFail($id);
        return view('admin.user.update', [
            'item' => $item,
            'id' => $item['id'],
            'name' => $item['name'],
            'lastName' => $item['last_name'],
            'email' => $item['email'],
            'role' => $item['role'],
            'login' => $item['login']
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::findorFail($id);
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
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findorFail($id);
        $item->delete();
        return redirect(route('users.index'));
    }
}
