@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-4">
                @include('partials.admin-sidebar')
            </div>
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Profile</div>
    
                    <div class="card-body">
                    {{'Name:'}}&nbsp;&nbsp;&nbsp;{{auth('admin')->user()->name}} <br>
                    {{'Email:'}}&nbsp;&nbsp;&nbsp;{{auth('admin')->user()->email}} <br>
                    <a href="/admin/{{auth('admin')->user()->id}}/edit"><button class="btn btn-dark">Update</button></a>
                    </div>
                </div>
            </div>
            
        </div>
</div>

 

@endsection
