<?php

namespace App\Http\Controllers\Admin;
use App\Slider;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $sliders=Slider::all();
       return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //return $request->all();
      $data=array();
     $data['title']=$request->title;
     $data['sub_title']=$request->sub_title;
     $image=$request->file('image');
     if ($image) {
        $image_name=str_random(20);
        $txt=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$txt;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path, $image_full_name);
        if ($success) {
            $data['image']=$image_url;
             DB::table('sliders')->insert($data);
         Session::put('exception','Data insert successfully');
         return Redirect::to('admin/slider/create');
        }

    }

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

        //using find() we get all data from data base
        $sliders=Slider::find($id);
    return view('admin.slider.edit',compact('sliders'));

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
        
    $data=array();
    $data['title']=$request->title;
    $data['sub_title']=$request->sub_title;
    $data['image']=$request->image;
    DB::table('sliders')->where('id',$id)->update($data);
    //for shng mssagp
    Session::put('exception','Data updated successfully');
    return Redirect::to('admin/slider/edit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
$slider=Slider::find($id);
unlink(filename,'image',$slider->image);
$slider->delete();
return redirect()->back()->with('successMsg','slider successfully deleted');


    }
}
