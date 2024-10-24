@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('partials.sidebar')
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
                                <a href="download-file"><button class="btn btn-dark">Download</button></a>
                            </div>
                        </div>
                    </div>
                    <hr style="color: black;"/>
                    <!-- Download Selected Topics Section -->
                    <div class="section mt-4">
                        <h4 class="{{ config('app.locale') == 'ur' ? 'text-right' : 'text-left' }}">@lang("tree.Choose Topic Title")</h4>
                        <form method="POST" action="/dashboard/download-by-titles" id="downloadForm">
                            @csrf
                            <div class="form-group">
                                <div id="loader" style="display: none;">Loading...</div>
                                <select id="titleFilter" name="titleId" class="form-select" aria-label=".form-select">
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Download Topics</button>
                        </form>
                    </div>
                    <hr style="color: black;"/>
                    <!-- Download by Date Range Section -->
                    <div class="section mt-4">
                        <h4>Download by Date Range</h4>
                        <form method="POST" action="/dashboard/download-by-date" id="dateRangeForm">
                            @csrf
                            <div class="form-group">
                                <label for="startDate">Start Date:</label>
                                <input type="date" id="startDate" name="start_date" value="{{ now()->subDay()->format("Y-m-d") }}" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="endDate">End Date:</label>
                                <input type="date" id="endDate" name="end_date" value="{{ now()->format("Y-m-d") }}" placeholder="{{ now()->format("m/d/Y") }}" class="form-control" required>
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
    <script type="text/javascript">
            $(document).ready(function() {
            // Initialize the Select2 component
            $('#titleFilter').select2({
                ajax: {
                    url: "{{ route('admin.filterTitle') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            title: params.term // search term
                        };
                    },
                    processResults: function(data) {
                        // Transform the response into the format expected by Select2
                        return {

                            results: data.filterTitles.map(function(item) {
                                return {
                                    id: item.id, // Adjust as needed based on your response data
                                    text: item.title // Adjust as needed based on your response data
                                };
                            })
                        };
                    },
                    cache: true
                },
                placeholder: "@lang("tree.select a title")",
                minimumInputLength: 1,
                dir: "rtl",
            });
        });
    </script>
@endsection

@section('styles')
<style>
    
</style>
@endsection
