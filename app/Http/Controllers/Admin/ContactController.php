<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public $data;

    public function setData($data){
        $this->data = $data;
    }

    public function __construct(){
        $contacts = Contact::get();
        $this->setData($contacts);
    }

    public function contact(){
        return view('admin.contact.contact', ['data' => $this->data]);
    }


    public function insert(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect(route('contact'));
    }




    public function delete($id){
        $item = Contact::find($id);
        $item->delete();
        return redirect(route('admin.contact'));
    }



    public function update($id){
        $item = Contact::find($id);
        return view('admin.contact.update', [
            'id' => $item->id,
            'name' => $item->name,
            'email' => $item->email,
            'subject' => $item->subject,
            'message' => $item->message
        ]);
    }



    public function updateForm(Request $request){
        $item = Contact::find($request->id);
        $item->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect(route('admin.contact'));
    }
}
