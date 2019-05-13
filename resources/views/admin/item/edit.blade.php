@extends('layouts.app')
@section('title','Item')
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
                            <h4 class="card-title">Update Item</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('item.update',$item->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                                    <option {{$category->id == $item->category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$item->name}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Description</label>
                                            <textarea name="description" rows="3" class="form-control">{{$item->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Price</label>
                                            <input type="number" class="form-control" name="price" value="{{$item->price}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label>Image</label><br>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a href="{{route('item.index')}}" class="btn btn-danger">BACK</a>
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
