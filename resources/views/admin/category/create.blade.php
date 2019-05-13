@extends('layouts.app')
@section('title','Category')
@push('css')
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
                            <h4 class="card-title">Add New Category</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('category.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" >
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <a href="{{route('category.index')}}" class="btn btn-danger">BACK</a>
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
