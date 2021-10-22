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
        $data = HeaderCategory::paginate(10);
        $this->setData($data);
        $HeaderData = Header::get();
        $this->setHeaderData($HeaderData);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.header.headerCategories.headerCat', [
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
        return view('admin.header.headerCategories.insert', [
            'headerData' => $this->HeaderData,
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
        HeaderCategory::insert([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parentId' => $request->parentId
        ]);
        return redirect(route('headerCategory.index'));
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
        $item = HeaderCategory::findorFail($id);
        return view('admin.header.headerCategories.update',[
            'item' => $item,
            'headerData' => $this->HeaderData,
            'id' => $id,
            'nameEn' => $item->name_en,
            'nameRu' => $item->name_ru,
            'parentId' => $item->parentId
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
        $item = HeaderCategory::findorFail($id);

        $item->update([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parentId' => $request->parentId
        ]);
        return redirect(route('headerCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HeaderCategory::findorFail($id);
        $item->delete();
        return redirect(route('headerCategory.index'));
    }
}
