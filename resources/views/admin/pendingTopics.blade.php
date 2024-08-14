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
                    <table style="color: black; border-color: black;" class="table table-bordered card-body">
                
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Added By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendingTopics as $topic)
                        <tr>
                            <td>{{ $topic->title }}</td>
                            <td class="badge bg-primary mt-2 ml-2">{{ $topic->status }}</td>
                            <td>{{ $topic->added_by }}</td>
                            <td>
                                <div class="d-flex">
                                    <span style="cursor:pointer; font-size: 14px; width: 70px; height: 25px;" class="badge bg-success mx-2">Accept</span>
                                    <span style="cursor:pointer; font-size: 14px; width: 70px; height: 25px;" class="badge bg-danger mx-2">Reject</span>
                                </div>
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

 

@endsection