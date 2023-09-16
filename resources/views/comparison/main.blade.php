@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    <div class="title islam comp py-4 mb-5">
        <h2 class="com-head">مکطس کے نصاب کے ساتھ دیگر نصابوں کا موازنہ</h2>
    </div>
    <div class="row d-md-flex justify-content-center lh-base w-50 cbtn">
        <a href="/naseehaClasses"><button class="btn btn-success my-3 py-3">النصیحہ کے نصاب کے ساتھ موازنہ</button></a>
        <a href="/maktabClasses"><button class="btn btn-success my-3 py-3">مکتب کے نصاب کے ساتھ موازنہ</button></a>
        <a href="/governmentClasses"><button class="btn btn-success my-3 py-3">سرکاری نصاب کے ساتھ موازنہ</button></a>
    </div>
</div>
@endsection