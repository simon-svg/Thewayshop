<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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





    public function team(){
        return view('admin.team.team', ['data' => $this->data]);
    }



    public function add(){
        return view('admin.team.insert');
    }



    public function insert(Request $request){
        $path = $request->file('img')->store('team');
        Team::insert([
            'name' => $request->name,
            'position' => $request->position,
            'img' => $path,
            'description' => $request->description
        ]);
        return redirect(route('admin.team.view'));
    }





    public function delete($id){
        $item = Team::findorFail($id);
        $img = $item->img;
        $item->delete();
        Storage::delete($img);
        return redirect(route('admin.team.view'));
    }






    public function update($id){
        $item = Team::findorFail($id);
        return view('admin.team.update', [
            'id' => $id,
            'name' => $item->name,
            'position' => $item->position,
            'img' => $item->img,
            'description' => $item->description
        ]);
    }





    public function updateForm(Request $request){
        Storage::delete($request->imgHid);
        $path = $request->file('img')->store('team');
        $item = Team::findorFail($request->id);
        $item->update([
            'name' => $request->name,
            'position' => $request->position,
            'img' => $path,
            'description' => $request->description
        ]);
        return redirect(route('admin.team.view'));
    }
}