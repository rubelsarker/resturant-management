@extends('layouts.app')
@section('title','Contact')
@push('css')

@endpush
@section('content')

    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{$contact->subject}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="com-md-12">
                                    <strong>Name:{{$contact->name}}</strong><br>
                                    <b>Email:{{$contact->email}}</b><br>
                                    <strong>Message</strong><hr>
                                    <p>{{$contact->message}}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a class="btn btn-danger" href="{{route('contact.index')}}">BACK</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
