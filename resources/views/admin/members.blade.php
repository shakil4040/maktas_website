@extends('layouts.app2')

@section('content')
<div class="container">
    @if($message= Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> {{ session('error') }}</strong>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.admin-sidebar')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Members</div>

                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter = 1;
                            @endphp
                            @foreach($members as $member)
                            <tr>
                                <th scope="row">{{ $counter++ }}</th>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>
                                    @if($member->is_approve == 0)
                                    <span class="badge bg-primary">Temporary</span>
                                    @else
                                    <span class="badge bg-primary">Permanent</span>
                                    @endif
                                </td>
                                <td class="pt-0"><a href=""><button class="btn btn-dark">Edit</button></a></td>
                                <!-- <td class="pt-0"><a href="/member/{{ $member->id }}/edit"><button class="btn btn-dark">Edit</button></a></td> -->
                                <td>
                                    <form action="{{ route('members.delete', $member->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    @if($member->is_approve == 0)
                                        <form action="{{ route('members.approve', $member->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success">Approve</button>
                                        </form>
                                    @endif
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