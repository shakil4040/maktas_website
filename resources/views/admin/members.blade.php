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
            @include('partials.admin-sidebar')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Branches</div>

                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($branches as $branch)
                            <tr>
                                <th scope="row">{{$x++}}</th>
                                <td>{{$branch->name}}</td>
                                <td>{{$branch->email}}</td>
                                <td><a href="/branch/{{$branch->id}}/edit"><button
                                            class="btn btn-dark">Edit</button></a></td>
                                <td><a href="/delete2/{{$branch->id}}"><button
                                            class="btn btn-dark">Delete</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>



@endsection