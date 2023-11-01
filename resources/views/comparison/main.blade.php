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
    <div class="row d-md-flex justify-content-center lh-base w-50 cbtn">
        <div class="tooltips tafseeli text-center">
            <a href="/naseehaClasses">
                <button class="btn btn-success my-3 py-3 tooltip1">
                    النصیحہ کے نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"
                        style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">النصیحہ کے نصاب سے
                        مراد An Nasihah Publications کا آٹھ
                        سالہ نصاب ہے۔</div>
                </button>
            </a>
            <i class="fa fa-info-circle tooltip1 infoi d-md-none" aria-hidden="true">
                <div class="tooltiptext" style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">
                    النصیحہ کے نصاب سے مراد An Nasihah Publications کا آٹھ
                    سالہ نصاب ہے۔
                </div>
            </i>
        </div>
        <div class="tooltips tafseeli text-center">
            <a href="/maktabClasses">
                <button class="btn btn-success my-3 py-3 tooltip1">
                    مکتب کے نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"
                        style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">مکتب کے نصاب سے
                        مراد مکتب تربیت المسلمین کا اسلامیات کا
                        نصاب ہے۔</div>
                </button>
            </a>
            <i class="fa fa-info-circle tooltip1 infoi d-md-none" aria-hidden="true">
                <div class="tooltiptext" style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">
                    مکتب کے نصاب سے مراد مکتب تربیت المسلمین کا اسلامیات کا
                    نصاب ہے۔</div>
            </i>
        </div>
        <div class="tooltips tafseeli text-center">
            <a href="/governmentClasses"><button class="btn btn-success my-3 py-3 tooltip1">
                    سرکاری نصاب کے ساتھ موازنہ
                    <div class="tooltiptext"
                        style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">سرکاری نصاب سے مراد
                        پنجاب ٹیکسٹ بورڈ کا 2022 کا
                        اسلامیات کا نصاب ہے۔</div>
                </button></a>
            <i class="fa fa-info-circle tooltip1 infoi d-md-none" aria-hidden="true">
                <div class="tooltiptext" style="top: 122px;font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">
                    سرکاری نصاب سے مراد پنجاب ٹیکسٹ بورڈ کا 2022 کا
                    اسلامیات کا نصاب ہے۔</div>
            </i>
        </div>
    </div>
</div>
@endsection