<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

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
            'title' => $request->title,
            'subtitle' => $request->subtitle,
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
            'id' => $id,
            'title' => $item->title,
            'subtitle' => $item->subtitle,
            'img' => $item->img
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
            'title' => $request->title,
            'subtitle' => $request->subtitle,
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
