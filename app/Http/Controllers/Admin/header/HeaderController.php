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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.header.header', [
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
        return view('admin.header.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Header::insert([
            'name' => $request->name,
            'link' => $request->link
        ]);
        return redirect(route('header.index'));
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
        $item = Header::findorFail($id);
        return view('admin.header.update',[
            'item' => $item,
            'data' => $this->data,
            'id' => $id,
            'name' => $item->name,
            'link' => $item->link
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
        $item = Header::findorFail($request->id);

        $item->update([
            'name' => $request->name,
            'link' => $request->link
        ]);
        return redirect(route('header.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Header::findorFail($id);
        $item->delete();
        return redirect(route('header.index'));
    }
}
