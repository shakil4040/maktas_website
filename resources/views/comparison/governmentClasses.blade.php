@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    <div class="title islam comp py-4 mb-5 tooltips">
        <h2 class="com-head tooltip1">مکطس و عکس کی فہرستوں کے ساتھ دیگر نصابوں کا موازنہ
            <div class="tooltiptext" style="top: 95px;font-size: 15px;line-height: 44px;right: 0px;">
                'مکطس' کا مطلب ہے، مسلمان کی طرح سوچنا۔ <br>
                 'عکس' کا مطلب ہے، عمل کر سکنا۔
            </div>
        </h2>
    </div>
    <div class="d-md-flex row w-50 justify-content-center cbtn">
        <a href="/middle/5"><button class="btn btn-success py-2">پہلی جماعت</button></a>
        <a href="/middle/6"><button class="btn btn-success py-2">دوسری جماعت</button></a>
        <a href="/middle/7"><button class="btn btn-success py-2">تیسری جماعت</button></a>
        <a href="/middle/8"><button class="btn btn-success py-2">چوتھی جماعت</button></a>
        <a href="/middle/9"><button class="btn btn-success py-2">پانچویں جماعت</button></a>
        <a href="/middle/10"><button class="btn btn-success py-2">چھٹی جماعت</button></a>
        <a href="/middle/11"><button class="btn btn-success py-2">ساتویں جماعت</button></a>
        <a href="/middle/12"><button class="btn btn-success py-2">آٹھویں جماعت</button></a>
        <a href="/middle/13"><button class="btn btn-success py-2">نویں جماعت</button></a>
        <a href="/middle/14"><button class="btn btn-success py-2">دسویں جماعت</button></a>
        <a href="/middle/15"><button class="btn btn-success py-2">گیارہویں جماعت</button></a>
        <a href="/middle/16"><button class="btn btn-success py-2">بارہویں جماعت</button></a>
    </div>
</div>
@endsection