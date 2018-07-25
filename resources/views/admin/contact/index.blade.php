@extends('layouts.app')
 @section('title','Contact')
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
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All contact</h4>
                </div>

                <div class="card-body">

                  <div class="table-responsive">
        <table id="table" class="table table-striped table-bordered"  style="width:100%" cellspacing="0">
                      <thead class="text-primary" style="width:100%">
                        <th width="">Id</th>
                        <th width="">Name</th>
                        <th width="">Email</th>
                        <th width="%">Subject</th>
                        <th width="%">Message</th>
                        <th width="%">Sent at</th>
                      </thead>


                      <tbody>
                        @foreach($contact as $key=>$contact)
                        <tr>
                         <td>{{$key+1}}</td>
                          <td>{{$contact->name}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->subject}}</td>
                          <td>{{$contact->message}}</td>
                          <td>{{$contact->created_at}}</td>
                          <td>
  
<a href="{{route('contact.show',$contact->id)}}" class="btn btn-info btn-sm"><i class="material-icons">details</i></a>



<form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',$contact->id)}}" method="DELETE" style="display: none;">
    {{csrf_field()}}
  
</form>
<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm ('Are you sure want to delete?')){

event.preventDefault();
document.getElementById('delete-form-{{$contact->id}}').submit();
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