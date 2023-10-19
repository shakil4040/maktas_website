@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    <div class="title islam comp py-4 mb-5">
        <h2 class="com-head">مکطس کے نصاب کے ساتھ دیگر نصابوں کا موازنہ</h2>
    </div>
    <div class="row d-md-flex justify-content-center lh-base w-50 cbtn">
        <div class="tooltips tafseeli">
            <a href="/naseehaClasses"><button class="btn btn-success my-3 py-3 tooltip1">
                    النصیحہ کے نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"  style="top: 122px;" >النصیحہ کے نصاب سے مراد An Nasihah Publications کا آٹھ سالہ نصاب ہے۔</div>
                </button></a>
        </div>
        <div class="tooltips tafseeli">
            <a href="/maktabClasses"><button class="btn btn-success my-3 py-3 tooltip1">
                    مکتب کے نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"  style="top: 122px;" >مکتب کے نصاب سے مراد مکتب تربیت المسلمین کا اسلامیات کا نصاب ہے۔</div>
                </button></a>
        </div>
        <div class="tooltips tafseeli">
            <a href="/governmentClasses"><button class="btn btn-success my-3 py-3 tooltip1">
                    سرکاری نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"  style="top: 122px;" >سرکاری نصاب سے مراد پنجاب ٹیکسٹ بورڈ کا 2022 کا اسلامیات کا نصاب ہے۔</div>
                </button></a>
        </div>
    </div>
</div>
@endsection