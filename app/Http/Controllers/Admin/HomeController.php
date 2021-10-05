<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public $data;
    public $img;


    public function setData($data)
    {
        return $this->data = $data;
    }
    public function __construct()
    {
        $data = Home::get();
        $this->setData($data);
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }




    public function setImg($request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images/home'), $imageName);
        return $imageName;
    }







    public function home()
    {
        return view('admin.home.home', [
            'data' => $this->data
        ]);
    }






    public function add()
    {
        return view('admin.home.insert');
    }






    public function insert(Request $request)
    {
        Home::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'img' => $this->setImg($request)
        ]);
        return redirect(route('admin.home'));
    }








    public function delete($id, $name){
        $item = Home::find($id);
        $item->delete();
        unlink(public_path("images/home/$name"));
        return redirect(route('admin.home'));
    }







    public function update($id){
        $item = Home::find($id);
        return view('admin.home.update',[
            'data' => $this->data,
            'id' => $id,
            'title' => $item->title,
            'subtitle' => $item->subtitle,
            'img' => $item->img
        ]);
    }






    public function updateForm(Request $request){
        $item = Home::find($request->id);
        $item->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'img' => $this->setImg($request)
        ]);
        return redirect(route('admin.home'));
    }
}
