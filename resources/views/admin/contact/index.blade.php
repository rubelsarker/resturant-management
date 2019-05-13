@extends('layouts.app')
@section('title','Contact')
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
                            <h4 class="card-title ">All Contact Message</h4>



                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display" id="table_id">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Sent At</th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $key=>$contact)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->created_at}}</td>

                                            <td class="text-center">
                                                <a href="{{route('contact.show',$contact->id)}}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">details</i>
                                                </a>
                                                <button onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$contact->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                }
                                                        "
                                                        type="button" class="btn btn-danger btn-sm"  >
                                                    <i class="material-icons">delete</i>
                                                </button>


                                                <form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',$contact->id)}}" method="post" style="display: none" >
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