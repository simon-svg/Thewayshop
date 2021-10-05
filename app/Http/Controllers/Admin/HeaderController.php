<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Header;

class HeaderController extends Controller
{
    public $data;

    public function setData($data){
        $this->data = $data;
    }

    public function __construct(){
        $data = Header::get();
        $this->setData($data);
    }



    public function header(){
        return view('admin.header.header', [
            'data' => $this->data
        ]);
    }



    public function add(){
        return view('admin.header.insert', ['data' => $this->data]);
    }



    public function insert(Request $request){
        Header::insert([
            'name' => $request->name,
            'parentId' => $request->parentId,
            'link' => $request->link
        ]);
        return redirect(route('admin.header'));
    }



    public function delete($id){
        $item = Header::find($id);
        $item->delete();
        return redirect(route('admin.header'));
    }





    public function update($id){
        $item = Header::find($id);
        return view('admin.header.update',[
            'data' => $this->data,
            'id' => $id,
            'name' => $item->name,
            'parentId' => $item->parentId,
            'link' => $item->link
        ]);
    }





    public function updateForm(Request $request){
        $item = Header::find($request->id);

        $item->update([
            'name' => $request->name,
            'parentId' => $request->parentId,
            'link' => $request->link
        ]);
        return redirect(route('admin.header'));
    }





}