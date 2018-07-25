@extends('layouts.app')
 @section('title','Create')
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
               
                    </div>


    
              <div class="card">
                <div class="card-header card-header-primary">
                 <h4 class="card-title"><a href="{{route('item.create')}}">Add item</a></h4>
                </div>

                <div class="card-body">
       <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}

               <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category Name</label>
                    <select class="form-control" name="category">
                      <option name="category">Select one</option>
                      <?php 
                        foreach ($categories as $key => $category) {?>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                       <?php }?>
                    </select>
                        </div>
                      </div>
                      </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Decsription</label>
                          <textarea class="form-control" name="description"></textarea>
                        </div>
                      </div>
                      </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="number" class="form-control" name="price">
                        </div>
                      </div>
                      </div>




                     <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                      </div>




              <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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