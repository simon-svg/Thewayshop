<?php

namespace App\Http\Controllers\Admin\header;

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
        return view('admin.header.insert');
    }



    public function insert(Request $request){
        Header::insert([
            'name' => $request->name,
            'link' => $request->link
        ]);
        return redirect(route('admin.header.view'));
    }



    public function delete($id){
        $item = Header::findorFail($id);
        $item->delete();
        return redirect(route('admin.header.view'));
    }





    public function update($id){
        $item = Header::findorFail($id);
        return view('admin.header.update',[
            'data' => $this->data,
            'id' => $id,
            'name' => $item->name,
            'link' => $item->link
        ]);
    }





    public function updateForm(Request $request){
        $item = Header::findorFail($request->id);

        $item->update([
            'name' => $request->name,
            'link' => $request->link
        ]);
        return redirect(route('admin.header.view'));
    }
}