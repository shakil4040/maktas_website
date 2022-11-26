@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    <div class="title islam comp py-2">
        <h1>مکطس کے نصاب کے ساتھ النصیحہ کے نصاب کا موازنہ</h1>
    </div>
    <div class="d-flex  justify-content-between cbtn">
        <a href="/naseeha/5"><button class="btn btn-success">پہلی جماعت</button></a>
        <a href="/naseeha/6"><button class="btn btn-success">دوسری جماعت</button></a>
        <a href="/naseeha/7"><button class="btn btn-success">تیسری جماعت</button></a>
        <a href="/naseeha/8"><button class="btn btn-success">چوتھی جماعت</button></a>
        <a href="/naseeha/9"><button class="btn btn-success">پانچویں جماعت</button></a>
        <a href="/naseeha/10"><button class="btn btn-success">چھٹی جماعت</button></a>
    </div>
    <div class="d-flex  justify-content-between cbtn">
        <a href="/naseeha/11"><button class="btn btn-success">ساتویں جماعت</button></a>
        <a href="/naseeha/12"><button class="btn btn-success">آٹھویں جماعت</button></a>
        <a href="/naseeha/13"><button class="btn btn-success">نویں جماعت</button></a>
        <a href="/naseeha/14"><button class="btn btn-success">دسویں جماعت</button></a>
        <a href="/naseeha/15"><button class="btn btn-success">گیارہویں جماعت</button></a>
        <a href="/naseeha/16"><button class="btn btn-success">بارہویں جماعت</button></a>
    </div>
</div>
@endsection