@extends('layouts.app')
@section('title','Reservation')
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush
@section('content')

    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Reservations</h4>



                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display" id="table_id">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Time and Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$reservation->name}}</td>
                                            <td>{{$reservation->phone}}</td>
                                            <td>{{$reservation->email}}</td>
                                            <td>{{$reservation->date_and_time}}</td>
                                            <td>{{$reservation->message}}</td>
                                            <td>
                                                @if($reservation->status == true)
                                                    <span class="badge badge-info">Confirmed</span>
                                                @else
                                                    <span class="badge badge-danger">Not Confirmed Yet</span>
                                                @endif

                                            </td>
                                            <td>{{$reservation->created_at}}</td>


                                            <td class="text-center">
                                                @if($reservation->status == false)
                                                    <button onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{$reservation->id}}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }
                                                            "
                                                            type="button" class="btn btn-info btn-sm"  >
                                                        <i class="material-icons">done</i>
                                                    </button>


                                                    <form id="status-form-{{$reservation->id}}" action="{{route('reservation.status',$reservation->id)}}" method="post" style="display: none" >
                                                        @csrf

                                                    </form>
                                                @endif

                                                <button onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$reservation->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                }
                                                        "
                                                        type="button" class="btn btn-danger btn-sm"  >
                                                    <i class="material-icons">delete</i>
                                                </button>


                                                <form id="delete-form-{{$reservation->id}}" action="{{route('reservation.destroy',$reservation->id)}}" method="post" style="display: none" >
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
@push('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
@endpush

{{--@extends('layouts.app')--}}
{{--@section('title','')--}}
{{--@push('css')--}}
{{--@endpush--}}
{{--@section('content')--}}
{{--@endsection--}}
{{--@push('js')--}}
{{--@endpush--}}