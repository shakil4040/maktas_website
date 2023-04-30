<span class="card card-success detail2">
    <div class="frame">

    </div>
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="title unwan py-1 px-5" title="{{ $tree->title }}">{{ $tree->title }}</div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    قاعدہ:
                    <span class="tooltiptext">
                        وہ باتیں جو اصول کی حیثیت رکھتی ہیں۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="qaida">{{ $easy->qaida }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->qaida }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    مختصر وضاحت:
                    <span class="tooltiptext">
                        مذکور عنوان کو ایسے چند الفاظ کے ساتھ تعبیر کرنا کہ عنوان سمجھ میں آجائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="mukhtasar">{{ $detail->detail }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $detail->detail }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    تعلیم:
                    <span class="tooltiptext">
                        اس سے مقصود یہ ہے کہ مذکور بات کا تعلق علم سے ہے یا عمل سے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="taleem">{{ $easy->taleem }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->taleem }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    راہِ عدل:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکورہ بات کا مرتبہ کیا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="adal">{{ $easy->rahe_adal }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->rahe_adal }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    حوالہ:
                    <span class="tooltiptext">
                        اس میں یہ بتایا گیا ہےکہ مختصر وضاحت میں مذکور بات کہاں سے لی گئی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="easy">{{ $yaad->hawala }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->hawala }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    عملی:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور عملی بات کا تعلق مشق سے ہے یا نہیں۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="">{{ $easy->amli_mashq }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->amli_mashq }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    حکم:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مختصر وضاحت میں مذکور بات کی حیثیت کیا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="hukam">{{ $easy->hukam }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->hukam }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    تسہیل:
                    <span class="tooltiptext">
                        یہاں پر مختصر وضاحت میں مذکور بات ضرورت پڑنے پرآسان انداز میں بیان کی گئی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="">{{ $easy->easy }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->easy }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    یاد دہانی:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور علمی یا عملی بات ایک بار پڑھائی جائے یا بار بار۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="">{{ $yaad->yad_dehani }}</span>
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->yad_dehani }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    مخاطب:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور بات کس کے لیے ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->mukhatab }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->mukhatab }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wahahat mr-2">
                <span class="unwanat tooltip1">
                    رفعِ اشکال:
                    <span class="tooltiptext">
                        اس کا مقصد مذکور بات پر ہونے والے اشکال کو دور کرنا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->rafe_ishkal }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->rafe_ishkal }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    کتنی تکرار:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور بات کتنی مرتبہ دہرائی جائے گی۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->kitni_takrar }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->kitni_takrar }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                جنس:
                    <span class="tooltiptext">
                    اس خانے میں یہ ذکر کیا گیا ہے کہ مذکور عنوان کا تعلق مرد سے ہے یا عورت سے یا ہر جنس سے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->jins }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->jins }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="hukam mr-2">
                <span class="unwanat tooltip1">
                حصول کا
                    طریقہ:
                    <span class="tooltiptext">
                        اس خانے یں یہ ذکر کیا گیا ہے کہ مذکور بات کو حاصل کرنے کا طریقہ کیا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->husool }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->husool }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $yaad->revision }}"><span
                    class="unwanat">دہرائی:</span><span>{{ $yaad->revision }}</span></div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    حیثیت:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور بات کو تعلق انفرادی عمل سے ہے یا اجتماعی سے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->hasiat }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->hasiat }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    تمہید خاص:
                    <span class="tooltiptext">
                        اس میں وہ بات ذکر کی جائے گی جو مذکور عنوان سے پہلے پڑھانا ضروری ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->tamheed_khas }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->tamheed_khas }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    شاذ مسائل:
                    <span class="tooltiptext">
                        وہ مسائل جن کی عمومی طور پر ضرورت نہیں ہوتی۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->shaz }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->shaz }} سے
                        ہے۔
                    </span>
                </span>
            </div>

        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    شعبہ:
                    <span class="tooltiptext">
                    اس کا مقصد یہ بتانا ہے کہ مذکور بات کس پیشے سے تعلق رکھتی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->shoba }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->shoba }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    علاقہ:
                    <span class="tooltiptext">
                    اس کا مقصد یہ بتانا ہے کہ مذکور بات کا تعلق کس علاقے سے ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->area }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->area }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    بلحاظِ عمر:
                    <span class="tooltiptext">
                    اس خانے میں عمر کے لحاظ سے عنوانات کا نمبر شمار درج کیا گیا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $detail->age_sr }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $detail->age_sr }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                 عمر:
                    <span class="tooltiptext">
                    اس خانے وہ عمر درج کی گئی ہے جس میں مذکور عنوان پڑھایا جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $detail->age }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $detail->age }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                 محرکات و نظریات:
                    <span class="tooltiptext">
                    اس عنوان سے مراد وہ عقائد و نظریات ہیں جن کو بنیاد بنا کر انسان عمل کرتا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->muharik }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->muharik }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                 نصابی نمبر:
                    <span class="tooltiptext">
                    اس خانے میں وہ نمبر شمار ذکر کیا گیا ہے جس سے نصاب بنانے میں مدد حاصل کی جاسکتی ہے ۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $detail->course_no }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $detail->course_no }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                 جماعت:
                    <span class="tooltiptext">
                    اس خانے میں وہ جماعت درج کی گئی ہے جس میں مذکور عنوان پڑھانا چاہیے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->class }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->class }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic mahol d-flex align-items-center">
            <div class="frame" style="height: 166px;top: 383px;">

            </div>
            <div class="mr-2 wazahat" title="{{ $easy->muharik }}">
                <span>{{ 'نیک صحبت میں ماحول مہیا کرنا ' }}</span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                 نمبر شمار:
                    <span class="tooltiptext">
                    اس خانے میں عنوانات کے مطابق نمبر شمار درج کیا گیا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $tree->sr }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $tree->sr }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                 احوال:
                    <span class="tooltiptext">
                    اس خانے میں ان لوگوں کا ذکر کیا جائے جن کے حالات خاص ہیں۔مثلاً گونکا ،بہرہ وغیرہ۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->ahwal }}
                    <span class="tooltiptext2">
                        مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->ahwal }} سے
                        ہے۔
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->sunana }}"><span
                    class="unwanat">سنانا:</span><span>{{ $mahol->sunana }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->kehalwana }}"><span
                    class="unwanat">کہلوانا:</span><span>{{ $mahol->kehalwana }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->dekhana }}"><span
                    class="unwanat">دکھانا:</span><span>{{ $mahol->dekhana }}</span></div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->abrar_id }}"><span
                    class="unwanat">اح:</span><span>{{ $detail->abrar_id }}</span></div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $easy->zamana }}"><span
                    class="unwanat">زمانہ:</span><span>{{ $easy->zamana }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->mashq }}"><span
                    class="unwanat">مشق:</span><span>{{ $mahol->mashq }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->batana }}"><span
                    class="unwanat">بتانا:</span><span>{{ $mahol->batana }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->sikhana }}"><span
                    class="unwanat">سکھانا:</span><span>{{ $mahol->sikhana }}</span></div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $detail->asif_id }}"><span
                    class="unwanat">آص:</span><span>{{ $detail->asif_id }}</span></div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $easy->taluq }}"><span class="unwanat">تعلق:</span><span
                    class="taluq">{{ $easy->taluq }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->adat }}"><span
                    class="unwanat">عادت:</span><span>{{ $mahol->adat }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->samjhana }}"><span
                    class="unwanat">سمجھانا:</span><span>{{ $mahol->samjhana }}</span></div>
        </div>
        <div class="stopic smahol d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $mahol->parhana }}"><span
                    class="unwanat">پڑھانا:</span><span>{{ $mahol->parhana }}</span></div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="tabs mr-2" title="{{ $tree->id }}"><span class="unwanat">آئی
                    ڈی:</span><span>{{ $tree->id }}</span></div>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <i class="fa fa-eye dicon" title="چھپی ہوئی تفصیلات دیکھیں" aria-hidden="true"></i>
        <div>
            @if($admin || $memberId)
                <button id="acomment" class="bbuttons my-1 ml-2 ara">آراء دیکھیں</button>
                <button class="bbuttons my-1 ml-2 toggler">نئے عنوان کا اندراج کریں</button>
            @endif
            @if($user)
                <!-- Button trigger modal -->
                <button type="button" class="bbuttons my-1 ml-2" data-toggle="modal" data-target="#exampleModalLong">
                    اپنی رائے کا اظہار کریں
                </button>

                <!-- Modal -->
            @endif
            <button id="mazmoon" class="bbuttons my-1 ml-2">مکمل مضمون پڑھیں</button>
        </div>
    </div>
</span>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
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
                    <div class="d-none" id="userId">{{ $userId }}</div>
                    <div class="d-none" id="treeId">{{ $tree->id }}</div>
                    <div class="d-none" id="treeTitle">{{ $tree->title }}</div>
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
                    <div class="alert" style="text-align:center">
                        <div class="red">
                            کسی بھی مضمون کو کلک کرنے پر اس کا خلاصہ لکھا ہو گا
                            اور
                            پورا مضمون پڑھئے کا کلک ہو گا۔
                            پورا مضمون پڑھنے کو کلک کرنے پر مندرجہ ذیل جملہ لکھا آئے گا۔ <br>
                        </div>
                        ہم معذرت خواہ ہیں کہ پورا مضمون صرف انرولڈ وزٹر پڑھ سکتے ہیں کیا آپ انرول ہونا چاہیں گے ؟
                    </div>
                    <router-link to="below4">
                        <button class="btn btn-primary">جی نہیں</button>
                    </router-link>
                    <router-link to="jihaan3">
                        <button class="btn btn-primary">جی ہاں</button>
                    </router-link>
                </div>
                <div class="accordion" id="accordionExample">
                    @if($easy->rahe_adal)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-right" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        راہِ عدل
                                    </button>
                                </h2>
                                <div class="arrow2">
                                    ❮
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
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
                                    <button class="btn btn-link btn-block text-right collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        رفعِ اشکال
                                    </button>
                                </h2>
                                <div class="arrow2">
                                    ❮
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
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
                                    <button class="btn btn-link btn-block text-right collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        حصول کا طریقہ
                                    </button>
                                </h2>
                                <div class="arrow2">
                                    ❮
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
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
