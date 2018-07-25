<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller{
    public function index(){
    $contact=Contact::all();
    $contactCount=Contact::count();

    return view('admin.contact.index',compact('contact','contactCount'));
    }

 public function show($id){
 $contact=Contact::find($id);
 return view('admin.contact.show',compact('contact'));

    }

    public function destroy($id){
    	Contact::find($id)->delete();
    	Toastr::success('Message successfully deleted','Success',["positionClass"=>"toast-top-right"]);
      return redirect()->back();

    }
}
