@extends('layouts.app2')

@section('content')

<div class="container">

    <!-- Loader -->
    <div id="loader" style="display:none;width:100%;height:100%;position:absolute;z-index:9999999;background:#4548485c;position:fixed;" class="row justify-content-center align-items-center" role="status">
        <img src="../../../public_html/assets/images/spinner.gif" width="5%" alt="loading">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.sidebar')
        </div>
        <div class="col-md-8">
            @if(session()->get('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ 'Upload File' }}</div>

                <div class="card-body">
                    <form id="uploadForm" method="POST" action="/dashboard/uploadFile" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Choose File')
                            }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror"
                                    name="file" required autofocus>

                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ 'Upload' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Show loader on form submit
    document.getElementById('uploadForm').addEventListener('submit', function() {
        document.getElementById('loader').style.display = 'flex';  // Show loader
    });
</script>
@endsection
