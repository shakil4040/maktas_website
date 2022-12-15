@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    
    <div class="d-flex  justify-content-between cbtn">
        <a href="/governmentDetailed/{{$class}}"><button class="btn btn-success">تفصیلی موازنہ</button></a>
        <a href="/governmentBasic/{{$class}}"><button class="btn btn-success">مختصر موازنہ</button></a>
    </div>
    
</div>
@endsection