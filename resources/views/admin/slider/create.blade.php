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
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><a href="{{route('slider.create')}}">Add slider</a></h4>
                </div>

                <div class="card-body">
       <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
                     {{csrf_field()}}
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="title" required="">
                        </div>
                      </div>
                      </div>


                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub Title</label>
                      <input type="text" class="form-control" name="sub_title" required="">
                        </div>
                      </div>
                      </div>
                  <div class="row">
                      <div class="col-md-12">
                            <label class="control-label">Image</label>
                          <input type="file" name="image" required="">
                        </div>
                      </div>
                      <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
               <button type="submit" class="btn btn-primary">Save</button>

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