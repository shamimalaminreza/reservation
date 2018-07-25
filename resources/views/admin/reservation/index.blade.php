@extends('layouts.app')
 @section('title','Reservation')
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
                  <h4 class="card-title ">All Reservation</h4>
                </div>

                <div class="card-body">

                  <div class="table-responsive">
        <table id="table" class="table table-striped table-bordered"  style="width:100%" cellspacing="0">
                      <thead class="text-primary" style="width:100%">
                        <th width="">Id</th>
                        <th width="">Name</th>
                        <th width="">Phone</th>
                        <th width="">Email</th>
                         <th width="">Message</th>
                       <th width="">Date and Time</th>
                       <th width="">Created at</th>
                        <th width="">Status</th>
                        <th width="">Action</th>

                      </thead>


                      <tbody>
                        @foreach($reservation as $key=>$reservation)
                        <tr>
                         <td>{{$key+1}}</td>
                          <td>{{$reservation->name}}</td>
                          <td>{{$reservation->phone}}</td>
                          <td>{{$reservation->email}}</td>
                          <td>{{$reservation->message}}</td>
                          <td>{{$reservation->date_and_time}}</td>
                          <td>{{$reservation->created_at}}</td>

                        <td>
                             @if ($reservation->status==true)
                              <span class="label label-info" style="background: green">Confirmed</span>
                                @else
                              <span class="label label-danger" style="background: red;">Not Confirmed</span>

                             @endif
                            </td>
                           <td>

        @if($reservation->status==false)
        <form id="status-form-{{$reservation->id}}" action="{{route('reservation.status',$reservation->id)}}" method="post" style="display: none;">
           {{csrf_field()}}
        </form>

     <button type="button" class="btn btn-info btn-sm"  onclick="if(confirm ('Are you verify this request by phone?')){
      event.preventDefault();
          document.getElementById('status-form-{{$reservation->id}}').submit();
         }else{
       event.preventDefault();
     }"><i class="material-icons" style="color:;background:#;">done</i></button>
      @endif

           <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')"><a href="{{route('reservation.destroy',$reservation->id)}}">Delete</a></button>

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