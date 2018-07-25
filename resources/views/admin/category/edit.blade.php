@extends('layouts.app')
 @section('title','Edit')
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
                  <h4 class="card-title"><a href="{{route('category.create')}}"></a></h4>
                </div>

                <div class="card-body">
       <form method="POST" action="{{route('category.update',$category->id)}}">
                                   {{csrf_field()}}

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category name</label>
                          <input type="text" class="form-control" name="name" required="" value="{{$category->name}}">
                        </div>
                      </div>
                      </div>


                      <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
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