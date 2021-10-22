<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Home;

class HomeController extends Controller
{
    public $data;
    public $img;


    public function setData($data)
    {
        return $this->data = $data;
    }
    public function __construct()
    {
        $data = Home::paginate(10);
        $this->setData($data);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.home', [
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
        return view('admin.home.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('img')->store('home');
        Home::insert([
            'title_en' => $request->titleEn,
            'title_ru' => $request->titleRu,
            'subtitle_en' => $request->subtitleEn,
            'subtitle_ru' => $request->subtitleRu,
            'img' => $path,
        ]);
        return redirect(route('home.index'));
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
        $item = Home::findorFail($id);
        return view('admin.home.update',[
            'item' => $item,
            'data' => $this->data,
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
            $img = $request->file('img')->store('home');
        }
        $item = Home::findorFail($id);
        $item->update([
            'title_en' => $request->titleEn,
            'title_ru' => $request->titleRu,
            'subtitle_en' => $request->subtitleEn,
            'subtitle_ru' => $request->subtitleRu,
            'img' => $img
        ]);
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Home::findorFail($id);
        $img = $item->img;
        $item->delete();
        Storage::delete($img);
        return redirect(route('home.index'));
    }
}
