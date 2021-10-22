<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public $data;
    public $productCategory;

    public function setProductCategory($productCategory){
        $this->productCategory = $productCategory;
    }
    public function setData($data){
        $this->data = $data;
    }

    public function __construct(){
        $productCategory = ProductCategory::get();
        $this->setProductCategory($productCategory);

        $data = Product::paginate(10);
        $this->setData($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.product', [
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
        return view('admin.product.insert', [
            'productCategory' => $this->productCategory,
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
        // dd($request->img);
        $path = $request->file('img')->store('product');
        Product::insert([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'price' => $request->price,
            'sale' => $request->sale,
            'description_en' => $request->descriptionEn,
            'description_ru' => $request->descriptionRu,
            'size' => $request->size[0],
            'number' => $request->number,
            'img' => $path,
            'show' => $request->show,
            'best_product' => $request->bestProduct,
            'category_id' => $request->categoryId,
            'show' => $request->show,
            'count' => $request->count,
            'imgs' => $request->imgs[0],
        ]);
        return redirect(route('product.index'));
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
        $item = Product::findorFail($id);
        return view('admin.product.update',[
            'item' => $item,
            'data' => $this->data,
            'productCategory' => $this->productCategory,
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
        $img = $request->imgHid;
        if(!empty($request->img)){
            Storage::delete($request->imgHid);
            $img = $request->file('img')->store('product');
        }
        $item = Product::findorFail($id);
        $item->update([
            'name_en' => $request->nameEn,
            'name_ru' => $request->nameRu,
            'price' => $request->price,
            'sale' => $request->sale,
            'description_en' => $request->descriptionEn,
            'description_ru' => $request->descriptionRu,
            'size' => $request->size[0],
            'number' => $request->number,
            'img' => $img,
            'show' => $request->show,
            'best_product' => $request->bestProduct,
            'category_id' => $request->categoryId,
            'show' => $request->show,
            'count' => $request->count,
            'imgs' => $request->imgs[0],
        ]);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $img = $item->img;
        $item->delete();
        Storage::delete($img);
        return redirect(route('product.index'));
    }
}
