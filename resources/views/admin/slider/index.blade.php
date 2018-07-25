@extends('layouts.app')
 @section('title','Slider')
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

           <h4 style="margin-bottom: 20px;margin-left: 17px;"><a href="{{route('slider.create')}}" class="btn btn-info">Add slider</a></h4>

                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All slider</h4>
                </div>

                <div class="card-body">

                  <div class="table-responsive">
        <table id="table" class="table table-striped table-bordered"  style="width:100%" cellspacing="0">
                      <thead class="text-primary" style="width:100%">
                        <th width="">Id</th>
                        <th width="">title</th>
                        <th width="">Sub title </th>
                        <th width="%">Image</th>
                        <th width="%">Create_at</th>
                      </thead>


                      <tbody>
                        @foreach($sliders as $key=>$slider)
                        <tr>
                         <td>{{$key+1}}</td>
                          <td>{{$slider->title}}</td>
                          <td>{{$slider->sub_title}}</td>
                          <td><img src="{{asset($slider->image)}}" style="width: 80px; height: 80px;"></td>
                          <td>{{$slider->create_at}}</td>
                          <td>
                           

<form id="delete-form-{{$slider->id}}" action="{{route('slider.destroy',$slider->id)}}" method="post" style="display: none;">
    {{csrf_field()}}
</form>
<button type="button" class="btn btn-danger btn-sm" disabled="" onclick="if(confirm ('Are you sure want to delete?')){

event.preventDefault();
document.getElementById('delete-form-{{$slider->id}}').submit();

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