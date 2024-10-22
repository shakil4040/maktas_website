@extends('layouts.app2')

@section('content')
    <div class="container">
        @if($message= Session::get('success'))
        <div id="successMessage" class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('partials.admin-sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Profile</div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Name:</strong> {{ auth('admin')->user()->name }}</p>
                        <p class="mb-3"><strong>Email:</strong> {{ auth('admin')->user()->email }}</p>
                        <a href="/admin/{{ auth('admin')->user()->id }}/edit"><button class="btn btn-dark">Update</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
