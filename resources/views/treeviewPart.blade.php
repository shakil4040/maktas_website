<span class="card card-success detail2">
<div class="bclose"> &#10006;</div>
    <div class="frame">

    </div>
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="scroll-topics  title unwan py-1 px-5" title="{{ $tree->title }}">{{ $tree->title }}</div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    قاعدہ:
                    <span class="tooltiptext">
                        یہ خانہ رہنمائی کرتا ہے کہ اس اصول کا اطلاق ہر جگہ ہوسکتا ہے یا کہیں کہیں۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="qaida">{{ $easy->qaida }}</span>
                    <span class="tooltiptext2">
                        @if($easy->qaida == 'کلی')
                        جو قانون ہر لحاظ سے قابل عمل ہو اس میں تبدیلی کی گنجائش نہ ہو۔
                        @endif
                        @if($easy->qaida == 'اکثری')
                        وہ باتیں جن کو بنیاد بناتے ہوئے زندگی بہتر گزاری جا سکتی ہے۔
                        @endif
                        @if($easy->qaida == 'جزوی')
                        جو اصول جو کہیں کہیں لگے اس کو جزوی کہتے ہیں۔
                        @endif
                        @if($easy->qaida == 'استثنائی')
                        جس اصول کی کوئی بات استثنا بنتی ہو وہاں اس کو بیان کرنا
                        @endif
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
                    <span class="mukhtasar" title="{{ $detail->detail }}">{{ $detail->detail }}</span>
                    <span class="tooltiptext2">
                        {{ $detail->detail }}
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
                        @if($easy->taleem == 'علمی')
                        وہ باتیں جن پر براہ ِراست عمل نہیں ہوسکتا لیکن عمل تک پہنچنے میں معاون ہوں۔
                        @endif
                        @if($easy->taleem == 'عملی')
                        وہ باتیں جن پر براہ ِراست عمل ہوسکتا ہے۔
                        @endif
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
                        @if($easy->rahe_adal == 'قانوناً')
                        وہ کام اگر نہیں کریں گے تو گنہگار ہوں گے۔
                        @endif
                        @if($easy->rahe_adal == 'دیانتاً')
                        وہ کام جس کے نہ کرنے سے بیلنس برابر نہیں ہو گا۔
                        @endif
                        @if($easy->rahe_adal == 'احساناً')
                        وہ کام جس سے گنہگار تو نہیں ہوں گے لیکن آپس کی محبت پیدا نہیں ہو گی۔
                        @endif
                        @if($easy->rahe_adal == 'مقصود')
                        اللہ تعالی کی رضا
                        @endif
                        @if($easy->rahe_adal == 'مقصود بالذات')
                        وہ چیزیں جن کے بغیر اللہ کی رضا ملنا ممکن نہیں ہے۔
                        @endif
                        @if($easy->rahe_adal == 'ذرائع')
                        وہ کام جو اللہ تعالی تک پہنچائے۔
                        @endif
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
                        {{ $yaad->hawala }}
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
                        @if($easy->amli_mashq == 'مشقی')
                        وہ کام جس کی بار بار مشق کی ضرورت ہو۔
                        @endif
                        @if($easy->amli_mashq == 'غیر مشقی')
                        وہ کام جس کی بار بار مشق کی ضرورت نہ ہو۔
                        @endif
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
                        @if($easy->hukam == 'فرض')
                        وہ حکم جو قرآن و حدیث سے یقینی طور پر ثابت ہو۔اس پر عمل کرنا ضروری ہے۔اس کو بلاعذر چھوڑنے والا
                        گناہ گار ہے ۔اس کا منکر کافر ہے۔
                        @endif
                        @if($easy->hukam == 'فرض عین')
                        فرض عین اس فرض کو کہتے ہیں جس کا ادا کرنا ہر شخص پر ضروری ہو اور بلا عذر چھوڑنے والا گنہگار ہو ۔
                        @endif
                        @if($easy->hukam == 'فرض کفایہ')
                        فرضِ کفایہ وہ فرض ہے جو ایک دو آدمیوں کے ادا کر لینے سے سب کے ذمّہ سے اُتر جائے ۔ اور کوئی ادا
                        نہ کرے تو سب کے سب گنہگار ہوں۔
                        @endif
                        @if($easy->hukam == 'واجب')
                        وہ عمل جس کا کرنا فرض کی طرح ضروری ہو ۔ اس کا منکر گناہ گار ہے کافر نہیں۔
                        @endif
                        @if($easy->hukam == 'سنت')
                        وہ عمل جو سنت مؤکدہ اور غیرمؤکدہ کا واضح حکم نہ لگایا گیا ہو۔
                        @endif
                        @if($easy->hukam == 'سنت مؤکدہ')
                        وہ عمل جو آپ ﷺیا صحابہ رضی اللہ عنہم نے عبادت کے طور پرہمیشہ کیا ہواور بلا عذر نہ چھوڑا ہو ۔ اس
                        پر بھی عمل کرنا واجب کی طرح ضروری ہے اور اس کا چھوڑنا گناہ ہے ۔ واجب اور سنت مؤکدہ میں فرق یہ ہے
                        کہ واجب کا چھوڑنے والا سزا کا مستحق ہے اور سنت مؤکدہ کا چھوڑنے والا ملامت کا۔
                        @endif
                        @if($easy->hukam == 'سنت غیر مؤکدہ')
                        وہ عمل جو آپ ﷺ نے عادتاً کیا ہو یا کبھی کیا ہو اور کبھی نہ کیا ہو۔ اس کو کرنے پر ثواب ہے اور
                        چھوڑنے پر گناہ نہیں۔ اسی کو نفل، مستحب اور ادب بھی کہتے ہیں۔
                        @endif
                        @if($easy->hukam == 'نفل')
                        وہ عمل جو آپﷺ نے عبادتاً کبھی کبھی کیا ہو۔اس کے کرنے پر ثواب ہے اور چھوڑنے پر گناہ نہیں ۔لیکن
                        اس کا درجہ سنت غیرمؤکدہ سے کم ہے۔
                        @endif
                        @if($easy->hukam == 'مستحب')
                        سنت غیر مؤکدہ اور نفل کو مستحب بھی کہتے ہیں ۔لیکن مستحب کی تعریف میں وہ باتیں بھی شامل ہیں جن کو
                        قابل اعتماد بزرگانِ دین اور فقہاء نے پسند کیا ہو۔
                        @endif
                        @if($easy->hukam == 'افضل')
                        وہ عمل جس کا کرنا افضل ہے۔
                        @endif
                        @if($easy->hukam == 'جائز')
                        وہ عمل جس کا کرنا جائز ہو۔
                        @endif
                        @if($easy->hukam == 'مباح')
                        وہ عمل جس کا کرنا جائز ہو لیکن اس کے کرنے پر نہ ثواب ہو نہ چھوڑنے پر گناہ۔
                        @endif
                        @if($easy->hukam == 'حرام')
                        وہ حکم جس کی ممانعت قرآن و حدیث سے یقینی طور پر ثابت ہو۔اس سے بچنا ضروری ہے ۔اس کو کرنے والا
                        گناہ گار ہے۔اس کو جائز سمجھنے والا کافر ہے۔
                        @endif
                        @if($easy->hukam == 'مکروہ تحریمی')
                        وہ عمل جس سے بچنا حرام کی طرح ضروری ہو۔ اس کو کرنے والا گناہ گار ہے۔اس کو جائز سمجھنے والا گناہ
                        گار ہے کافر نہیں۔
                        @endif
                        @if($easy->hukam == 'مکروہ تنزیہی')
                        وہ فعل جس سے بچنے میں ثواب ہے،لیکن جو نہ بچے اس پر کوئی گناہ اور عذاب بھی نہیں۔
                        @endif
                        @if($easy->hukam == 'ناجائز')
                        وہ عمل جس کا کرنا جائز نہ ہو۔
                        @endif
                        @if($easy->hukam == 'بنیاد')
                        وہ کام جو شرعی حکم میں نہیں آسکتے۔
                        @endif
                        @if($easy->hukam == 'دفعِ مضرت')
                        وہ جو کام جس کا نفع یا نقصان خا ص ہو۔
                        @endif
                        @if($easy->hukam == 'ابہام')
                        وہ بات جس کا حکم فی الحال معلوم نہ ہو سکا۔
                        @endif
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
                        {{ $easy->easy }}
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
                        @if($yaad->yad_dehani == 'عملی تکرار')
                        یہ فلٹر admin کے لئے ہے ۔ تعلیمی نظم کے درمیان جن باتوں کی تکرار ضروری ہے اس کی نشاندہی کرنا۔
                        @endif
                        @if($yaad->yad_dehani == 'علمی تکرار')
                        یہ فلٹر admin کے لئے ہے ۔تعلیمی نظم کے درمیان جن عقائد اور نظریاتی باتوں کی تکرار ضروری ہے اس کی
                        نشاندہی کرنا۔
                        @endif
                        @if($yaad->yad_dehani == 'ایک بار')
                        مذکور بات ایک بار پرھائی جائے گی۔
                        @endif
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
                        @if($easy->mukhatab == 'خواص')
                        علم و عمل میں عوام سے آگے ہوں لیکن اس درجے میں نہیں کہ عوام ان
                        کی اقتداء کرے۔
                        @endif
                        @if($easy->mukhatab == 'مقتداء')
                        جو متبع شریعت اور متبع سنت اس درجے میں ہوں کہ عوام ان کی اتباع
                        کرکے گمراہ نہ ہوں۔
                        @endif
                        @if($easy->mukhatab == 'عوام')
                        جو خواص اور مقتداء نہ ہوں۔
                        @endif
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
                        اس کا مقصد مذکور بات پر ہونے والے ممکنہ اشکال کو دور کرنا ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->rafe_ishkal }}
                    <span class="tooltiptext2">
                        {{ $easy->rafe_ishkal }}
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
                        اس کا مقصد یہ بتانا ہے کہ مذکوربات کتنی مرتبہ مختلف طریقوں سے پڑھائی جائے گی۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->kitni_takrar }}
                    <span class="tooltiptext2">
                        {{ $yaad->kitni_takrar }}
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
                        @if($easy->jins == 'مرد')
                        وہ احکام جن کا تعلق صرف مرد سے ہے۔
                        @endif
                        @if($easy->jins == 'عورت')
                        وہ احکام جن کا تعلق صرف عورت سے ہے۔
                        @endif
                        @if($easy->jins == 'ہر جنس')
                        مذکور بات کا تعلق مرد، عورت ،وغیرہ ہر ایک کے ساتھ ہے۔
                        @endif
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
                        {{ $easy->husool }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    دہرائی:
                    <span class="tooltiptext">
                        اس خانے میں یہ ذکر گیا ہے کہ مذکور بات کی دہرائی ضروری ہے یا نہیں۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->revision }}
                    <span class="tooltiptext2">
                        @if($yaad->revision == 'ضروری')
                        اس بات کی دہرائی ضروری ہے۔
                        @endif
                        @if($yaad->revision == 'غیر ضروری')
                        وہ احکام جن کا تعلق صرف عورت سے ہے۔
                        @endif
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
                    حیثیت:
                    <span class="tooltiptext">
                        اس کا مقصد یہ بتانا ہے کہ مذکور بات کا تعلق انفرادی عمل سے ہے یا اجتماعی سے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->hasiat }}
                    <span class="tooltiptext2">
                        @if($easy->hasiat == 'انفرادی')
                        وہ نیک کام جو ایک مسلمان اکیلا کر سکتا ہے۔
                        @endif
                        @if($easy->hasiat == 'اجتماعی')
                        وہ نیک کام جو بالعموم مسلمان عوام کے ذمے ہیں اور لوگ مل کر ہی اسے مکمل کر سکتے ہیں۔
                        @endif
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
                        اس خانے میں وہ بات ذکر کی گئی ہے جو مذکور عنوان سے پہلے پڑھانا ضروری ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->tamheed_khas }}
                    <span class="tooltiptext2">
                        {{ $easy->tamheed_khas }}
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
                        {{ $yaad->shaz }}
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
                        @if($easy->shoba == 'ہر شعبہ')
                        مذکور بات کا تعلق کسی خاص شعبے سے نہیں۔ بلکہ تمام شعبوں سے ہے۔
                        @endif
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
                        {{ $easy->area }}
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
                        {{ $detail->age_sr }}
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
                        {{ $detail->age }}
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
                        {{ $easy->muharik }}
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
                        {{ $detail->course_no }}
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
                        {{ $easy->class }}
                    </span>
                </span>
            </div>
        </div>
        <div class="ltopic mahol d-flex align-items-center">
            <div class="frame" style="height: 203px;top: 455px;">

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
                        {{ $tree->sr }}
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
                        اس خانے میں ان لوگوں کا ذکر کیا گیا ہےجن کے حالات خاص ہیں۔مثلاً گونکا ،بہرہ وغیرہ۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $yaad->ahwal }}
                    <span class="tooltiptext2">
                        @if($yaad->ahwal == 'تمام احوال')
                        مذکور بات کا تعلق خاص قسم کے افراد سے نہیں ہے۔ بلکہ تمام لوگوں کے ساتھ ہے۔
                        @endif
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    سنانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات سنائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->sunana }}
                    <span class="tooltiptext2">
                        {{ $mahol->sunana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    کہلوانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات کہلوائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->kehalwana }}
                    <span class="tooltiptext2">
                        {{ $mahol->kehalwana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    دکھانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات دکھائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->dekhana }}
                    <span class="tooltiptext2">
                        {{ $mahol->dekhana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    اح:
                    <span class="tooltiptext">
                        اس خانےمیں مولانا ابرار صاحب کی فائل کی آئی ڈی درج کی گئی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $detail->abrar_id }}
                    <span class="tooltiptext2">
                        {{ $detail->abrar_id }}
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
                    زمانہ:
                    <span class="tooltiptext">
                        اس خانے میں وہ زمانہ آئے گا جس کے ساتھ مذکور بات کا تعلق ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->zamana }}
                    <span class="tooltiptext2">
                        {{ $easy->zamana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    مشق:
                    <span class="tooltiptext">
                        اس خانےمیں وہ عمر درج کی گئی ہے جس میں مذکور بات کی مشق کرائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->mashq }}
                    <span class="tooltiptext2">
                        {{ $mahol->mashq }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    بتانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات بتائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->batana }}
                    <span class="tooltiptext2">
                        {{ $mahol->batana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    سکھانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات سکھائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->sikhana }}
                    <span class="tooltiptext2">
                        {{ $mahol->sikhana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    آص:
                    <span class="tooltiptext">
                        اس خانےمیں مولانا ابرار صاحب کی فائل کی آئی ڈی درج کی گئی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $detail->asif_id }}
                    <span class="tooltiptext2">
                        {{ $detail->asif_id }}
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
                    تعلق:
                    <span class="tooltiptext">
                        اس خانے میں یہ بتایا گیا ہے کہ مذکور بات کا تعلق ظاہر سے ہے یا باطن سے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $easy->taluq }}
                    <span class="tooltiptext2">
                        @if($easy->taluq == 'ظاہری')
                        وہ عمل جن کا ہونا یانہ ہونا نظر آتا ہے۔ یعنی ان کا تعلق ظاہر سے ہے۔
                        @endif
                        @if($easy->taluq == 'باطنی')
                        وہ عمل جن کا ہونا یا نہ ہونا نظر نہیں آتا، صرف محسوس ہوتا ہے۔ یعنی ان کا تعلق باطن سے ہے۔
                        @endif
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    عادت:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات کی عادت ڈالی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->adat }}
                    <span class="tooltiptext2">
                        {{ $mahol->adat }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    سمجھانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات سمجھائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->samjhana }}
                    <span class="tooltiptext2">
                        {{ $mahol->samjhana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic smahol d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    پڑھانا:
                    <span class="tooltiptext">
                        اس خانے میں وہ عمر درج کی گئی ہے جس میں مذکور بات پڑھائی جائے۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $mahol->parhana }}
                    <span class="tooltiptext2">
                        {{ $mahol->parhana }}
                    </span>
                </span>
            </div>
        </div>
        <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2">
                <span class="unwanat tooltip1">
                    آئی ڈی:
                    <span class="tooltiptext">
                        اس خانے میں وہ آئی ڈی آئےگی جو websiteخود بنائے گی۔
                    </span>
                </span>
                <span class="tooltip2">
                    {{ $tree->id }}
                    <span class="tooltiptext2">
                        {{ $tree->id }}
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5 justify-content-between align-items-center">
        <i class="fa fa-eye dicon ml-3" title="چھپی ہوئی تفصیلات دیکھیں" aria-hidden="true"></i>
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
                                <button class="btn btn-link btn-block text-right" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
<script>
    $('.bclose').click(function() {
        $('.detail2').hide();
    });
    $('.detail2').click(function() {
        $('.bclose').addClass('sbclose');
    });
    $('.detail2').click(function(){
        $(this).addClass('detail2').removeClass('shrink');
        $('.btitle').removeClass('shtitle');
    });
    </script>