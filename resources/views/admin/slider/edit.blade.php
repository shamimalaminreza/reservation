@extends('layouts.app')
 @section('title','Slider')
 @push('css')

 @endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">


    <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>

                     <span>
                     <b></b><?php 
                              $exception=Session::get('exception');
                               if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
                                }
                    ?></span>
                            
                 </div>


    
              <div class="card">
                <div class="">
                  <h4 class="card-title"><a href="{{route('slider.create')}}"></a></h4>
                </div>

                <div class="card-body">
       <form method="POST" action="{{route('slider.update',$sliders->id)}}" enctype="multipart/form-data">
              

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="title" required="" value="{{$sliders->title}}">
                        </div>
                      </div>
                      </div>


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub Title</label>
                      <input type="text" class="form-control" name="sub_title" required="" value="{{$sliders->sub_title}}">
                        </div>
                      </div>
                      </div>


                  <div class="row">
                      <div class="col-md-12">
                            <label class="control-label">Image</label>
         <input type="file" name="image" required="" value="{{URL::to($sliders->image)}}">
                        </div>
                      </div>
                      <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
               <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>


                </div>
              </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
 
@endpush