@extends('layouts.app2')

@section('content')
<div class="container">
    <!-- Display success or error message -->
    @if(session('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> {{ session('success') }}</strong>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ session('error') }}</strong>
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
                                    <form action="{{ route('topic.accept', $topic->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @if($topic->status !== 'Approved')
                                            <button type="submit" class="btn btn-success mx-2">Accept</button>
                                        @endif
                                    </form>
                                    <button type="submit" class="btn btn-danger mx-2">Reject</button>
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