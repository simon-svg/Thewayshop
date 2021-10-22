<?php

namespace App\Http\Controllers\Admin\header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\HeaderSubmenu;
use App\Models\Header;
use App\Models\HeaderCategory;

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
        $data = HeaderSubmenu::paginate(10);
        $this->setData($data);
        $HeaderData = Header::get();
        $this->setheaderData($HeaderData);
        $HeaderCategoryData = HeaderCategory::get();
        $this->setheaderCategoryData($HeaderCategoryData);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.header.headerSubmenus.headerSub', [
            'data' => $this->data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.headerSubmenus.insert', [
            'headerData' => $this->HeaderData,
            'headerCategoryData' => $this->HeaderCategoryData
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HeaderSubmenu::insert([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parentCategoryId' => $request->parentCategoryId,
            'link' => $request->link
        ]);
        return redirect(route('submenu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderSubmenu  $headerSubmenu
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderSubmenu $headerSubmenu)
    {
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderSubmenu  $headerSubmenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = HeaderSubmenu::find($id);
        return view('admin.header.headerSubmenus.update', [
            'item' => $item,
            'headerCategoryData' => $this->HeaderCategoryData
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderSubmenu  $headerSubmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = HeaderSubmenu::findorFail($id);
        $item->update([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parentCategoryId' => $request->parentCategoryId,
            'link' => $request->link
        ]);
        return redirect(route('submenu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderSubmenu  $headerSubmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HeaderSubmenu::findorFail($id);
        $item->delete();
        return redirect(route('submenu.index'));
    }
}
