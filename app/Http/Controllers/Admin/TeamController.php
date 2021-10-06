<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Team;

class TeamController extends Controller
{
    public $data;
    public $img;

    public function setData($data){
        $this->data = $data;
    }

    public function __construct(){
        $data = Team::get();
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
        $request->img->move(public_path('images/team'), $imageName);
        return $imageName;
    }



    public function team(){
        return view('admin.team.team', ['data' => $this->data]);
    }



    public function add(){
        return view('admin.team.insert');
    }



    public function insert(Request $request){
        Team::insert([
            'name' => $request->name,
            'position' => $request->position,
            'img' => $this->setImg($request),
            'description' => $request->description
        ]);
        return redirect(route('admin.team'));
    }





    public function delete($id, $name){
        $item = Team::find($id);
        $item->delete();
        unlink(public_path("images/team/$name"));
        return redirect(route('admin.team'));
    }






    public function update($id){
        $item = Team::find($id);
        return view('admin.team.update', [
            'id' => $id,
            'name' => $item->name,
            'position' => $item->position,
            'img' => $item->img,
            'description' => $item->description
        ]);
    }





    public function updateForm(Request $request){
        $item = Team::find($request->id);
        // $img = $request->img ? $this->setImg($request) : $item->img;
        $item->update([
            'name' => $request->name,
            'position' => $request->position,
            'img' => $this->setImg($request),
            'description' => $request->description
        ]);
        return redirect(route('admin.team'));
    }
}