@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.admin-sidebar')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Download File' }}</div>

                <div class="card-body">
                    <!-- Simple Download Section -->
                    <div class="section">
                        <h4>Download all data</h4>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <a href="/admin-download-file"><button class="btn btn-dark">Download</button></a>
                            </div>
                        </div>
                    </div>
                    <hr style="color: black;"/>
                    <!-- Download Selected Topics Section -->
                    <div class="section mt-4">
                        <h4>Download Selected Topics</h4>
                        <form method="POST" action="/admin-download-by-titles" id="downloadForm">
                            @csrf
                            <div class="form-group">
    
                            <div id="loader" style="display: none;">Loading...</div>
                            <select id="topics" name="topics[]" class="form-select" aria-label=".form-select" multiple>
                            @foreach ($topics as $id => $title)
                                    <option value="{{ $id }}">{{ $title }}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Download Topics</button>
                        </form>
                    </div>
                    <hr style="color: black;"/>
                    <!-- Download by Date Range Section -->
                    <div class="section mt-4">
                        <h4>Download by Date Range</h4>
                        <form method="POST" action="/admin-download-by-date" id="dateRangeForm">
                            @csrf
                            <div class="form-group">
                                <label for="startDate">Start Date:</label>
                                <input type="date" id="startDate" name="start_date" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="endDate">End Date:</label>
                                <input type="date" id="endDate" name="end_date" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Download by Date</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection

@section('styles')
<style>
    
</style>
@endsection
