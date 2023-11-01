@extends('layouts.islam')

@section('content')
<link href="/css/treeview.css" rel="stylesheet">
<div class="d-flex flex-column comparison justify-content-center align-items-center">
    
    <div class="d-md-flex  justify-content-between cbtn">
        <div class="tooltips tafseeli">
            <a href="/governmentDetailed/{{$class}}"><button class="btn btn-success py-2 tooltip1">
                تفصیلی موازنہ
                <div class="tooltiptext">تمام باتوں یعنی فرض، واجب، مستحب، وغیرہ کا موازنہ دیکھنے کے لیے یہاں کلک کریں۔</div>
            </button></a>
            <i class="fa fa-info-circle tooltip1 infoi d-md-none" aria-hidden="true">
            <div class="tooltiptext" style="font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">تمام باتوں یعنی فرض، واجب، مستحب، وغیرہ کا موازنہ دیکھنے کے لیے یہاں کلک کریں۔</div>
            </i>
        </div>
        <div class="tooltips">
            <a href="/governmentDetailed/{{$class}}"><button class="btn btn-success py-2 tooltip1">
            مختصر موازنہ
                <div class="tooltiptext">ضروری باتوں یعنی فرض، واجب، سنت مؤکدہ،حرام، مکروہ تحریمی اور بنیادی باتوں کا موازنہ دیکھنے کے لیے یہاں کلک کریں۔</div>
            </button></a>
            <i class="fa fa-info-circle tooltip1 infoi d-md-none" aria-hidden="true">
            <div class="tooltiptext" style="font-family: 'Noto Nastaliq Urdu', serif;font-size: 16px;">ضروری باتوں یعنی فرض، واجب، سنت مؤکدہ،حرام، مکروہ تحریمی اور بنیادی باتوں کا موازنہ دیکھنے کے لیے یہاں کلک کریں۔</div>
            </i>
        </div>
    </div>
    
</div>
@endsection