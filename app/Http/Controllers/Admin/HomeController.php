<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

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
        $path = $request->file('img')->store('home');
        Home::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'img' => $path,
        ]);
        return redirect(route('admin.home.view'));
    }








    public function delete($id){
        $item = Home::findorFail($id);
        $img = $item->img;
        $item->delete();
        Storage::delete($img);
        return redirect(route('admin.home.view'));
    }







    public function update($id){
        $item = Home::findorFail($id);
        return view('admin.home.update',[
            'data' => $this->data,
            'id' => $id,
            'title' => $item->title,
            'subtitle' => $item->subtitle,
            'img' => $item->img
        ]);
    }






    public function updateForm(Request $request){
        Storage::delete($request->imgHid);
        $path = $request->file('img')->store('home');
        $item = Home::findorFail($request->id);
        $item->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'img' => $path
        ]);
        return redirect(route('admin.home.view'));
    }
}
