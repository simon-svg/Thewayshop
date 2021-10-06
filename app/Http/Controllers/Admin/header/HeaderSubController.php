<?php

namespace App\Http\Controllers\admin\header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\HeaderSubmenu;
use App\Models\HeaderCategory;
use App\Models\Header;

class HeaderSubController extends Controller
{
    public $data;
    public $HeaderData;
    public $HeaderCategoryData;

    public function setData($data){
        $this->data = $data;
    }
    public function setheaderData($HeaderData){
        $this->HeaderData = $HeaderData;
    }
    public function setheaderCategoryData($HeaderCategoryData){
        $this->HeaderCategoryData = $HeaderCategoryData;
    }


    public function __construct(){
        $data = HeaderSubmenu::get();
        $this->setData($data);
        $HeaderData = Header::get();
        $this->setheaderData($HeaderData);
        $HeaderCategoryData = HeaderCategory::get();
        $this->setheaderCategoryData($HeaderCategoryData);
    }



    public function headerSub(){
        return view('admin.header.headerSubmenus.headerSub', [
            'data' => $this->data
        ]);
    }




    public function add(){
        return view('admin.header.headerSubmenus.insert', [
            'headerData' => $this->HeaderData,
            'headerCategoryData' => $this->HeaderCategoryData
        ]);
    }

    

    
    public function insert(Request $request){
        HeaderSubmenu::insert([
            'name' => $request->name,
            'parentCategoryId' => $request->parentCategoryId,
            'link' => $request->link
        ]);
        return redirect(route('admin.header.sub'));
    }
    

    

    public function delete($id){
        $item = HeaderSubmenu::find($id);
        $item->delete();
        return redirect(route('admin.header.sub'));
    }




    
    public function update($id){
        $item = HeaderSubmenu::find($id);
        return view('admin.header.headerSubmenus.update',[
            'headerData' => $this->HeaderData,
            'headerCategoryData' => $this->HeaderCategoryData,
            'id' => $id,
            'name' => $item->name,
            'parentCategoryId' => $item->parentCategoryId,
            'link' => $item->link
        ]);
    }




    public function updateForm(Request $request){
        $item = HeaderSubmenu::find($request->id);
        $item->update([
            'name' => $request->name,
            'parentCategoryId' => $request->parentCategoryId,
            'link' => $request->link
        ]);
        return redirect(route('admin.header.sub'));
    }
}
