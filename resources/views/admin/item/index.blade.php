@extends('layouts.app')
@section('title','Items')
@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 @endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
 <h4 style="margin-bottom: 20px;margin-left: 17px;"><a href="{{route('item.create')}}" class="btn btn-info">Add Item</a></h4>

    <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="material-icons">close</i>

                    </button>
                     <span>
                     <b></b><?php 
                              $successMsg=Session::get('successMsg');
                               if ($successMsg) {
                                 echo $successMsg;
                                 Session::put('successMsg',null);
                               }
                    ?></span>         
                    </div>








                <div class="card-header card-header-primary">
          <h4 class="card-title">All Item</h4>
                </div>

                <div class="card-body">
              <div class="table-responsive">
        <table id="table" class="table table-striped table-bordered"  style="width:100%" cellspacing="0">
                      <thead class="text-primary" style="width:100%">
                        <th width="8px">Id</th>
                        <th width="100px">Name</th>
                        <th width="140px">Image</th>
                        <th width="200px">Category name</th>
                        <th width="200px">Description</th>
                        <th width="100px">Price</th>
                        <th width="130px">Create_at</th>
                        <th width="140px">Updated_at</th>
                        <th width="150px">Action</th>
                      </thead>

                      <tbody>
                        @foreach($items as $key=>$item)
                        <tr>
                         <td>{{$key+1}}</td>
                          <td>{{$item->name}}</td>
                          <td><img src="{{asset('uploads/item/'.$item->image)}}" alt="" style="width: 120px;height: 120px;"></td>
                          <td>{{$item->category->name}}</td>
                          <td>{{$item->description}}</td>
                          <td>{{$item->price}}</td>
                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                          <td>

 <a href="{{route('item.edit',$item->id)}}" onclick="return confirm ('Are you sure want to edit?')" class="btn btn-info btn-sm" disabled=""><i class="material-icons">mode_edit</i></a>

<form id="delete-form-{{$item->id}}" action="{{route('item.destroy',$item->id)}}" method="post" style="display: none;">
    {{csrf_field()}}
</form>
<button type="button" class="btn btn-danger btn-sm" disabled="" onclick="if(confirm ('Are you sure want to delete?')){

event.preventDefault();
document.getElementById('delete-form-{{$item->id}}').submit();

}else{
event.preventDefault();

}"><i class="material-icons" style="color:;background:#;">delete</i></button>

                          </td>
                        </tr>
                       @endforeach
                      </tbody>


                    </table>
                  </div>
                </div>


                </div>
              </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
   <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js "></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
</script>


@endpush