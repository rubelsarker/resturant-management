@extends('layouts.app')
@section('title','Category')
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
                    <a class="btn btn-primary" href="{{route('category.create')}}">Add New Category</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Categories</h4>



                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display" id="table_id">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->updated_at}}</td>
                                            <td class="text-center">
                                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                                <button onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$category->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                }
                                                        "
                                                        type="button" class="btn btn-danger btn-sm"  >
                                                    <i class="material-icons">delete</i>
                                                </button>


                                                <form id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}}" method="post" style="display: none" >
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