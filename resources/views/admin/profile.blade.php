@extends('layouts.app2')

@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('flash_message_error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('partials.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    @php
                        $user = auth()->user();
                        $userable = $user->userable;
                    @endphp

                    @if($user->isAdmin())
                        <div class="card-header">Admin Profile</div>
                    @elseif($user->isMember())
                        @if($userable->is_approve === 1)
                            <div class="card-header">Permanent Member Profile</div>
                        @elseif($userable->is_approve === 0)
                            <div class="card-header">Temporary Member Profile</div>
                        @endif
                    @endif

                    <div class="card-body">
                        <p class="mb-2"><strong>Name:</strong> {{ $userable->name }}</p>
                        <p class="mb-3"><strong>Email:</strong> {{ $userable->email }}</p>
                        <a href="/dashboard/{{ $userable->id }}/edit"><button class="btn btn-dark">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection