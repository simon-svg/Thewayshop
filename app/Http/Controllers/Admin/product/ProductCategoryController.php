<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\HeaderCategory;

class ProductCategoryController extends Controller
{
    public $data;
    public $headerCategory;

    public function setData($data){
        $this->data = $data;
    }
    public function setHeaderCategory($headerCategory){
        $this->headerCategory = $headerCategory;
    }

    public function __construct(){
        $productCategory = ProductCategory::paginate(10);
        $this->setData($productCategory);

        $headerCategory = HeaderCategory::where('parentId', 3)->get();
        $this->setHeaderCategory($headerCategory);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.productCategory.productCategory', [
            'data' => $this->data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productCategory.insert', [
            'headerCategorys' => $this->headerCategory,
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
        ProductCategory::insert([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parent_category_id' => $request->parentCategoryId,
        ]);
        return redirect(route('productCategory.index'));
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
        $productCategory = ProductCategory::findOrFail($id);
        return view('admin.productCategory.update', [
            'item' => $productCategory,
            'headerCategorys' => $this->headerCategory,
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
        $item = ProductCategory::findOrFail($id);
        $item->update([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'parent_category_id' => $request->parentCategoryId,
        ]);
        return redirect(route('productCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductCategory::findOrFail($id);
        $item->delete();
        return redirect(route('productCategory.index'));
    }
}
