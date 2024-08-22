@extends('layouts.app2')

@section('content')
<div class="container">
    @if($message= Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.member-sidebar')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Member Profile</div>

                <div class="card-body">
                    {{'Name:'}}&nbsp;&nbsp;&nbsp;{{auth('member')->user()->name}} <br>
                    {{'Email:'}}&nbsp;&nbsp;&nbsp;{{auth('member')->user()->email}} <br>
                    <a href="/member/{{auth('member')->user()->id}}/edit"><button class="btn btn-dark">Update</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection