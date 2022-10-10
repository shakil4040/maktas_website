@extends('layouts.app')

@section('content')

<div class="container">
    <div class="who-you-are">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="for-login">
                    <h2>Who You Are?</h2>
                    <p>
                        This is a learning website where age & skill based learning solutions are provided to its user
                    </p>
                    <div class="login-btns">
                        <a href="{{route('login')}}"><button type="button" class="btn btn-success">Student</button></a>
                        <a href="{{route('login')}}"><button type="button" class="btn btn-secondary">Teacher</button></a>
                        <a href="{{route('login')}}"><button type="button" class="btn btn-primary">School Pricipal</button></a>
                        <a href="{{route('login')}}"><button type="button" class="btn btn-danger">None of These</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>

@endsection