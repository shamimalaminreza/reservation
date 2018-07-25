<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
class ReservationController extends Controller{
public function reserve(Request $request){
//validation 
$this->validate($request,['name'=>'required','phone'=>'required','email'=>'required|email',
'dateandtime'=>'required','message'=>'required',]);
$reservation=new Reservation();
$reservation->name=$request->name;
$reservation->phone=$request->phone;
$reservation->email=$request->email;
$reservation->date_and_time=$request->dateandtime;
$reservation->message=$request->message;
$reservation->status=false;
$reservation->save();
Toastr::success('Request sent successfully','Success',["positionClass"=>"toast-top-center"]);
return redirect()->back();
   }
}
