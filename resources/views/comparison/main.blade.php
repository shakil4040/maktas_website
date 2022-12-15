@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex comparison justify-content-center align-items-center">
    <div class="title islam comp py-2">
        <h1>مکطس کے نصاب کے ساتھ دیگر نصابوں کا موازنہ</h1>
    </div>
    <div class="d-flex w-50 justify-content-between cbtn">
        <a href="/naseehaClasses"><button class="btn btn-success">النصیحہ کے نصاب کے ساتھ موازنہ</button></a>
        <a href="/maktabClasses"><button class="btn btn-success">مکتب کے نصاب کے ساتھ موازنہ</button></a>
        <a href="/governmentClasses"><button class="btn btn-success">سرکاری نصاب کے ساتھ موازنہ</button></a>
    </div>
</div>
@endsection