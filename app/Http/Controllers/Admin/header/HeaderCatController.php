<?php

namespace App\Http\Controllers\Admin\header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\HeaderCategory;
use App\Models\Header;

class HeaderCatController extends Controller
{
    public $data;
    public $HeaderData;

    public function setData($data){
        $this->data = $data;
    }
    public function setHeaderData($HeaderData){
        $this->HeaderData = $HeaderData;
    }


    public function __construct(){
        $data = HeaderCategory::get();
        $this->setData($data);
        $HeaderData = Header::get();
        $this->setHeaderData($HeaderData);
    }



    public function headerCat(){
        return view('admin.header.headerCategories.headerCat', [
            'data' => $this->data
        ]);
    }


    
    public function add(){
        return view('admin.header.headerCategories.insert', ['headerData' => $this->HeaderData]);
    }



    
    public function insert(Request $request){
        HeaderCategory::insert([
            'name' => $request->name,
            'parentId' => $request->parentId
        ]);
        return redirect(route('admin.header.cat'));
    }


    


    public function delete($id){
        $item = HeaderCategory::find($id);
        $item->delete();
        return redirect(route('admin.header.cat'));
    }


    

    public function update($id){
        $item = HeaderCategory::find($id);
        return view('admin.header.headerCategories.update',[
            'headerData' => $this->HeaderData,
            'id' => $id,
            'name' => $item->name,
            'parentId' => $item->parentId
        ]);
    }




    public function updateForm(Request $request){
        $item = HeaderCategory::find($request->id);

        $item->update([
            'name' => $request->name,
            'parentId' => $request->parentId
        ]);
        return redirect(route('admin.header.cat'));
    }
}
