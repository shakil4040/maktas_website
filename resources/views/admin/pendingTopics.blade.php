@extends('layouts.app2')

@section('content')
    <div class="container">
        <!-- Display success or error message -->
        @if (session('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        @if (!empty($error))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $error }}</strong>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('partials.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Temporary Member Topics List</div>
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
                                @foreach ($pendingTopics as $topic)
                                    <tr>
                                        <td>{{ $topic->title }}</td>
                                        <td class="mt-2 ml-2">
                                            @if($topic->status === 'Pending')
                                                <span class="badge bg-primary">{{ $topic->status }}</span>
                                            @elseif($topic->status === 'Approved')
                                                <span class="badge bg-success">{{ $topic->status }}</span>
                                            @elseif($topic->status === 'Rejected')
                                                <span class="badge bg-danger">{{ $topic->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $topic->added_by }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Check if the status is not 'Rejected' to show the buttons -->
                                                @if ($topic->status !== 'Rejected')
                                                    <!-- Accept Button -->
                                                    <form action="{{ route('topics.accept', $topic->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('PATCH') <!-- Use PATCH for partial updates -->
                                                        @if ($topic->status !== 'Approved')
                                                            <button type="submit" class="btn btn-success mx-2">Accept</button>
                                                        @endif
                                                    </form>

                                                    <!-- Reject Button -->
                                                    <form action="{{ route('topics.reject', $topic->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('PATCH')
                                                        @if ($topic->status !== 'Approved')
                                                            <button type="submit" class="btn btn-danger mx-2">Reject</button>
                                                        @endif
                                                    </form>
                                                @endif
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
