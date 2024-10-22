@extends('layouts.app2')

@section('content')



<div class="container">
    @if($message= Session::get('success'))
        <div id="successMessage" class="alert alert-success alert-block">
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
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    Hi boss!
                    <br>
                    <br>
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
<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 3000);
</script>