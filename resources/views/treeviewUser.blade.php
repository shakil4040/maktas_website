<span class="card card-success detail2">
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="title unwan py-1 px-5" title="{{ $tree->title }}">{{ $tree->title }}</div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="ltopic align-items-center udetail" style="position:relative;">
            <div class="unwanat text-center my-2">مختصر وضاحت</div>
            <div class="mr-2 text-wrap" title="{{ $detail->detail }}">
                <span class="mukhtasar">{{ $detail->detail }}
                </span>
            </div>
            <button id="mazmoon" class="bbuttons my-1 ml-2 mazmon">مکمل مضمون پڑھیں</button>
            @if($easy->easy)
            <button id="tasheel1" class="bbuttons my-1 ml-2 mazmon tasheel">تسہیل</button>
            @endif
        </div>
        <div id="tasheel2" class="ltopic align-items-center tasheel2 udetail">
            <div class="unwanat text-center my-2">تسہیل</div>
            <div class="mr-2 text-wrap" title="{{ $easy->easy }}">
                <span class="mukhtasar">{{ $easy->easy }}
                </span>
            </div>
            <button id="tasheel3" class="bbuttons my-1 ml-2 mazmon">بند کریں</button>
        </div>
        <!-- <div class="stopic d-flex align-items-center">
                <div class="dot">
                    </div>
                    <div class="tabs mr-2" title="{{ $easy->taleem }}"><span class="unwanat">تعلیم:</span><span class="taleem">{{ $easy->taleem }}</span></div>
                </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="ltopic w-100 d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $yaad->hawala }}"><span class="unwanat">حوالہ:</span><span class="easy->">{{ $yaad->hawala }}</span></div>
        </div>
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
                </div>
                <div class="tabs mr-2" title="{{ $easy->amli_mashq }}"><span class="unwanat">عملی :</span><span>{{ $easy->amli_mashq }}</span><span class="tooltiptext">{{ $mahol->sunana }} سال کی عمر میں یہ بات سنانا مفید ہے۔</span></div>
            </div> -->
    </div>
    <div class="d-xl-flex flex-wrap justify-content-between">
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">حکم:</span><span class="hukam">{{ $easy->hukam }}</span><span class="tooltiptext">مختصر وضاحت میں ذکر کی گئی بات {{ $easy->hukam }} ہے۔</span></div>
        </div>
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">عمر:</span><span>{{ $detail->age }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات {{ $detail->age }} سال کی عمر میں پڑھانی چاہیے۔</span></div>
        </div>
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">حیثیت:</span><span>{{ $easy->hasiat }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات مسلمان کی {{ $easy->hasiat }} ذمہ داری  ہے۔</span></div>
        </div>
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">جماعت:</span><span>{{ $easy->class }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات جماعت {{ $easy->class }}  میں پڑھانی چاہیے۔</span></div>
        </div>
        @if($easy->qaida)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">قاعدہ:</span><span class="qaida">{{ $easy->qaida }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور قاعدے کا اطلاق {{ $easy->qaida }} طور پر ہوتا ہے۔</span></div>
        </div>
        @endif
        @if($easy->zamana)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">زمانہ:</span><span>{{ $easy->zamana }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->zamana }} کے زمانے سے ہے۔</span></div>
        </div>
        @endif
        @if($easy->shoba)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">شعبہ:</span><span>{{ $easy->shoba }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->shoba }} کے شعبے سے ہے۔</span></div>
        </div>
        @endif
        @if($easy->mukhatab)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">مخاطب:</span><span class="tooltip2"><a href="#">{{ $easy->mukhatab }}</a>
            @if($easy->mukhatab == 'خواص')
            <span class="tooltiptext2">جن باتوں کا علم عوام کے لئے ضروری نہیں وہ خواص یا مقتداء کے ذیل میں آئیں  گی۔ </span>
            @endif
            @if($easy->mukhatab == 'مقتداء')
            <span class="tooltiptext2">جن باتوں کا علم عوام یا  خواص کے لئے ضروری نہیں وہ مقتداء کے ذیل میں آئیں  گی۔ </span>
            @endif
        </span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->mukhatab }} سے ہے۔</span>
            
        </div>
        </div>
        @endif
        @if($easy->jins)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">جنس:</span><span>{{ $easy->jins }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->jins }} سے ہے۔</span></div>
        </div>
        @endif
        @if($yaad->ahwal)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">احوال:</span><span>{{ $yaad->ahwal }}</span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->ahwal }} سے ہے۔</span></div>
        </div>
        @endif
        <!-- <div class="ltopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $easy->easy }}"><span class="unwanat">تسہیل:</span><span>{{ $easy->easy }}</span></div>
        </div> -->
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $yaad->yad_dehani }}"><span class="unwanat">یاد دہانی:</span><span>{{ $yaad->yad_dehani }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex flex-wrap justify-content-between">
        <div class="ltopic mahol d-flex align-items-center justify-content-center">

            <div><span>{{ 'نیک صحبت میں درج ذیل کا ماحول مہیا کرنا ' }}</span></div>
        </div>
        @if($mahol->sunana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سنانا:</span><span>{{ $mahol->sunana }}</span><span class="tooltiptext">{{ $mahol->sunana }} سال کی عمر میں یہ بات سنانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->kehalwana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">کہلوانا:</span><span>{{ $mahol->kehalwana }}</span><span class="tooltiptext">{{ $mahol->kehalwana }} سال کی عمر میں یہ بات کہلوانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->dekhana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">دکھانا:</span><span>{{ $mahol->dekhana }}</span><span class="tooltiptext">{{ $mahol->dekhana }} سال کی عمر میں یہ بات دکھانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->mashq)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">مشق:</span><span>{{ $mahol->mashq }}</span><span class="tooltiptext">{{ $mahol->mashq }} سال کی عمر میں اس بات کی مشق مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->batana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">بتانا:</span><span>{{ $mahol->batana }}</span><span class="tooltiptext">{{ $mahol->batana }} سال کی عمر میں یہ بات بتانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->sikhana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سکھانا:</span><span>{{ $mahol->sikhana }}</span><span class="tooltiptext">{{ $mahol->sikhana }} سال کی عمر میں یہ بات سکھانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->adat)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">عادت:</span><span>{{ $mahol->adat }}</span><span class="tooltiptext">{{ $mahol->adat }} سال کی عمر میں اس بات کی عادت ڈالنا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->samjhana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سمجھانا:</span><span>{{ $mahol->samjhana }}</span><span class="tooltiptext">{{ $mahol->samjhana }} سال کی عمر میں یہ بات سمجھانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($mahol->parhana)
        <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">پڑھانا:</span><span>{{ $mahol->parhana }}</span><span class="tooltiptext">{{ $mahol->parhana }} سال کی عمر میں یہ بات پڑھانا مفید ہے۔</span></div>
        </div>
        @endif
        @if($user)
        <!-- Button trigger modal -->
        <button type="button" class="bbuttons my-1 ml-2" style="position: absolute;bottom: 5px;left: 5px;" data-toggle="modal" data-target="#exampleModalLong">
            اپنی رائے کا اظہار کریں
        </button>

        <!-- Modal -->
        @endif
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $yaad->kitni_takrar }}"><span class="unwanat">کتنی تکرار:</span><span>{{ $yaad->kitni_takrar }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $yaad->revision }}"><span class="unwanat">دہرائی:</span><span>{{ $yaad->revision }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="ltopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $easy->tamheed_khas }}"><span class="unwanat">تمہیدِ خاص:</span><span>{{ $easy->tamheed_khas }}</span></div>
        </div> -->
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $yaad->shaz }}"><span class="unwanat">شاذ مسائل:</span><span>{{ $yaad->shaz }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="ltopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $easy->tamheed_am }}"><span class="unwanat">تمہیدِ عام:</span><span>{{ $easy->tamheed_am }}</span></div>
        </div> -->
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->age_sr }}"><span class="unwanat">بلحاظ عمر:</span><span>{{ $detail->age_sr }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="ltopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $easy->muharik }}"><span class="unwanat">محرکات و نظریات:</span><span class="muharik">{{ $easy->muharik }}</span></div>
        </div> -->
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->course_no }}"><span class="unwanat">نصابی نمبر:</span><span>{{ $detail->course_no }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $tree->sr }}"><span class="unwanat">نمبر شمار:</span><span>{{ $tree->sr }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->abrar_id }}"><span class="unwanat">اح:</span><span>{{ $detail->abrar_id }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->asif_id }}"><span class="unwanat">آص:</span><span>{{ $detail->asif_id }}</span></div>
        </div> -->
    </div>
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $easy->taluq }}"><span class="unwanat">تعلق:</span><span class="taluq">{{ $easy->taluq }}</span></div>
        </div> -->
        <!-- <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $tree->id }}"><span class="unwanat">آئی ڈی:</span><span>{{ $tree->id }}</span></div>
        </div> -->
    </div>
    <div class="d-flex justify-content-end align-items-center">
        <!-- <i class="fa fa-eye dicon" title="چھپی ہوئی تفصیلات دیکھیں" aria-hidden="true"></i> -->
        <div>
            @if($admin)
            <button id="acomment" class="bbuttons my-1 ml-2 ara">آراء دیکھیں</button>
            <button class="bbuttons my-1 ml-2 toggler">نئے عنوان کا اندراج کریں</button>
            @endif
        </div>
    </div>
</span>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle">اپنی رائے کا اظہار کریں</h5>
            </div>
            <div class="alert mt-3 alert-success print-csuccess-msg" style="display:none;width:95%;margin:auto;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul></ul>
            </div>
            <div class="alert alert-danger print-cerror-msg" style="display:none;width:95%;margin:auto;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul></ul>
            </div>
            <form id="comment">
                @csrf
                <div class="modal-body d-flex justify-content-center">
                    <div class="d-none" id="userId">{{$userId}}</div>
                    <div class="d-none" id="treeId">{{$tree->id}}</div>
                    <div class="d-none" id="treeTitle">{{$tree->title}}</div>
                    <textarea name="comment" id="" cols="40" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بند کریں</button>
                    <button class="btn btn-primary">محفوظ کریں</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="overlay">
    <div class="pay-overlay d-flex justify-content-center align-items-center">
        <button id="close-overlay" class="overlay-close d-flex justify-content-center align-items-center">x</button>
        <div class="overlay-inner pb-3">
            <div class="d-flex justify-content-center align-items-center overlay-head">
                <h4 style="font-weight:700;">{{ $tree->title }}</h4>
            </div>
            <div class="mx-auto text-center overlay-bdiv">
                <div class="pb-4">
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                    {{ $detail->detail }}
                </div>
                <div class="accordion" id="accordionExample">
                    @if($easy->rahe_adal)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-right" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    راہِ عدل
                                </button>
                            </h2>
                            <div class="arrow2">
                                ❮
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body text-right">
                                {{ $easy->rahe_adal }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($easy->rafe_ishkal)
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-right collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    رفعِ اشکال
                                </button>
                            </h2>
                            <div class="arrow2">
                                ❮
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body text-right">
                                {{ $easy->rafe_ishkal }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($easy->husool)
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-right collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    حصول کا طریقہ
                                </button>
                            </h2>
                            <div class="arrow2">
                                ❮
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body text-right">
                                {{ $easy->husool }}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- <div class="d-flex my-4 text-right justify-content-end">
                    <div class="stopic d-flex align-items-center">
                        <div class="dot">
                        </div>
                        <div class="tabs mr-2" title="{{ $easy->rahe_adal }}"><span class="unwanat">راہِ عدل:</span><span class="adal">{{ $easy->rahe_adal }}</span></div>
                    </div>
                    <div class="ltopic d-flex align-items-center">
                        <div class="dot">
                        </div>
                        <div class="mr-2 wazahat" title="{{ $easy->rafe_ishkal }}"><span class="unwanat">رفعِ اشکال:</span><span>{{ $easy->rafe_ishkal }}</span></div>
                    </div>
                    <div class="ltopic d-flex align-items-center">
                        <div class="dot">
                        </div>
                        <div class="mr-2 wazahat" title="{{ $easy->husool }}"><span class="unwanat">حصول کا طریقہ:</span><span>{{ $easy->husool }}</span></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script src="/js/treeviewPart.js"></script>