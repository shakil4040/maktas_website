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
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                <br>
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    Hi there, awesome member
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
