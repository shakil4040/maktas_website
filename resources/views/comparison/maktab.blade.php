@extends('layouts.islam')

@section('content')
<div id="comment2">

</div>
<div id="edit2">

</div>
<div id="div1">

</div>

<div class="col-md-12">
    <div class="row">
    </div>
    <div class="title islam py-2 my-3">
        <h1>مکطس کے نصاب کے ساتھ مکتب کے نصاب کا موازنہ </h1>
    </div>
    <ul id="tree1">
        @php
        $tamheed = 0;
        $aqaid = 0;
        $ebadat = 0;
        $muamlat = 0;
        $muashrat = 0;
        $akhlaq = 0;
        $riyasat = 0;
        $quran = 0;
        $seeratm = 0;
        $seerata = 0;
        $seyars = 0;
        $seyarsa = 0;
        $tareekh = 0;
        $hifat = 0;
        $mmmdt = 0;
        @endphp
        @foreach($categories as $category)
        <div class="row">
            <div class="col-md-12">
                <li title="{{ $category->title }}" class="list_color">
                    @if ($category->parent_id >= 1000000 && $category->parent_id < 2000000 && $tamheed==0) <div class="title islam py-2 my-3">
                        <h4>{{"تمہیداتِ عامہ"}} </h4>
            </div>

            @php $tamheed=1;
            @endphp
            @endif
            @if ($category->parent_id >= 2000000 && $category->parent_id < 3000000 && $aqaid==0) <div class="title islam py-2 my-3">
                <h4>{{"عقائد"}} </h4>
        </div>
        @php
        $aqaid = 1;
        @endphp
        @endif
        @if ($category->parent_id >= 3000000 && $category->parent_id < 4000000 && $ebadat==0) <div class="title islam py-2 my-3">
            <h4>{{"عبادات"}} </h4>
</div>

@php $ebadat=1;
@endphp
@endif
@if ($category->parent_id >= 4000000 && $category->parent_id < 5000000 && $muamlat==0) <div class="title islam py-2 my-3">
    <h4>{{"معاملات"}} </h4>
    </div>

    @php $muamlat=1;
    @endphp
    @endif
    @if ($category->parent_id >= 5000000 && $category->parent_id < 6000000 && $muashrat==0) <div class="title islam py-2 my-3">
        <h4>{{"معاشرت"}} </h4>
        </div>

        @php $muashrat=1;
        @endphp
        @endif
        @if ($category->parent_id >= 7000000 && $category->parent_id < 8000000 && $akhlaq==0) <div class="title islam py-2 my-3">
            <h4>{{"اخلاقیات"}} </h4>
            </div>

            @php $akhlaq=1;
            @endphp
            @endif
            @if ($category->parent_id >= 8000000 && $category->parent_id < 9000000 && $riyasat==0) <div class="title islam py-2 my-3">
                <h4>{{"اسلامی ریاست"}} </h4>
                </div>

                @php $riyasat=1;
                @endphp
                @endif
                @if ($category->parent_id >= 9000000 && $category->parent_id < 10000000 && $quran==0) <div class="title islam py-2 my-3">
                    <h4>{{"قرآن کریم"}} </h4>
                    </div>

                    @php $quran=1;
                    @endphp
                    @endif
                    @if ($category->parent_id >= 10000000 && $category->parent_id < 11000000 && $seeratm==0) <div class="title islam py-2 my-3">
                        <h4>{{"سیرتِ مصطفیٰ ﷺ"}} </h4>
                        </div>

                        @php $seeratm=1;
                        @endphp
                        @endif
                        @if ($category->parent_id >= 11000000 && $category->parent_id < 12000000 && $seerata==0) <div class="title islam py-2 my-3">
                            <h4>{{"سیر الانبیاء علیہم السلام"}} </h4>
                            </div>

                            @php $seerata=1;
                            @endphp
                            @endif
                            @if ($category->parent_id >= 12000000 && $category->parent_id < 13000000 && $seyars==0) <div class="title islam py-2 my-3">
                                <h4>{{"سیر الصحابہ رضی اللہ عنہم"}} </h4>
                                </div>

                                @php $seyars=1;
                                @endphp
                                @endif
                                @if ($category->parent_id >= 13000000 && $category->parent_id < 14000000 && $seyarsa==0) <div class="title islam py-2 my-3">
                                    <h4>{{"سیر الصالحین"}} </h4>
                                    </div>

                                    @php $seyarsa=1;
                                    @endphp
                                    @endif
                                    @if ($category->parent_id >= 14000000 && $category->parent_id < 15000000 && $tareekh==0) <div class="title islam py-2 my-3">
                                        <h4>{{"تاریخِ امت مسلمہ"}} </h4>
                                        </div>

                                        @php $tareekh=1;
                                        @endphp
                                        @endif
                                        @if ($category->parent_id >= 15000000 && $category->parent_id < 16000000 && $hifat==0) <div class="title islam py-2 my-3">
                                            <h4>{{"حفاظت و اشاعتِ دین"}} </h4>
                                            </div>

                                            @php $hifat=1;
                                            @endphp
                                            @endif
                                            @if ($category->parent_id >= 16000000 && $category->parent_id < 17000000 && $mmmdt==0) <div class="title islam py-2 my-3">
                                                <h4>{{"مجموعہ معلومات معاون دینی تعلیمات"}} </h4>
                                                </div>

                                                @php $mmmdt=1;
                                                @endphp
                                                @endif
                                                <span class="detail1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dot2 d-flex align-items-center">
                                                            @if(count($category->childs))
                                                            <i class="fa fa-plus detail1 iicon" aria-hidden="true"></i>
                                                            @endif
                                                        </div>
                                                        @if($category->maktab_com == 1)
                                                        <div class="ctitle list d-flex justify-content-between align-items-center taqabul">
                                                            {{ $category->title }}
                                                            @auth('admin')
                                                            @if(!count($category->childs))
                                                            <div class="d-flex">
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                                <i class="fa fa-times-circle mx-2 delete"></i>
                                                            </div>
                                                            @endif
                                                            @endauth
                                                            @auth('member')
                                                            @if(!count($category->childs))
                                                            <div class="d-flex">
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                                <i class="fa fa-times-circle mx-2 delete"></i>
                                                            </div>
                                                            @endif
                                                            @endauth
                                                        </div>
                                                        @else
                                                        <div class="ctitle list d-flex justify-content-between align-items-center">
                                                            {{ $category->title }}
                                                            @auth('admin')
                                                            @if(!count($category->childs))
                                                            <div class="d-flex">
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                                <i class="fa fa-times-circle mx-2 delete"></i>
                                                            </div>
                                                            @endif
                                                            @endauth
                                                            @auth('member')
                                                            @if(!count($category->childs))
                                                            <div class="d-flex">
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                                <i class="fa fa-times-circle mx-2 delete"></i>
                                                            </div>
                                                            @endif
                                                            @endauth
                                                        </div>
                                                        @endif
                                                        <div class="cid d-none">{{ $category->id }}</div>
                                                        <div class="admin d-none">{{ auth('admin')->user() }}</div>
                                                        <div class="user d-none">{{ auth()->user() }}</div>
                                                        @auth()
                                                        <div class="userId d-none">{{ auth()->user()->id }}</div>
                                                        @endauth
                                                    </div>
                                                </span>

                                                </li>
                                                </div>
                                                </div>
                                                @endforeach
                                                </ul>
                                                </div>
                                                @endsection