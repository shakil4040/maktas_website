<span class="card card-success detail2">
    <div class="bclose"> &#10006;</div>
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="scroll-topics title btitle unwan text-center px-4 py-1">{{ $tree->title }}</div>
    </div>
    @if($tafseer)
    <div class="row" style="margin: 5px 16px 5px 0px;background: #f1f2f4;padding: 8px;width: 95%;border-radius: 8px;">
        <div>{{ $tafseer->topic1 }}</div>
        @if($tafseer->topic2)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic2 }}
        </div>
        @endif
        @if($tafseer->topic3)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic3 }}
        </div>
        @endif
        @if($tafseer->topic4)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic4 }}
        </div>
        @endif
        @if($tafseer->topic5)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic5 }}
        </div>
        @endif
        @if($tafseer->topic6)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic6 }}
        </div>
        @endif
        @if($tafseer->topic7)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic7 }}
        </div>
        @endif
        @if($tafseer->topic8)
        <div><span style="color:#f1f2f4;">d</span>{{ '<' }}<span style="color:#f1f2f4;">d</span>{{ $tafseer->topic8 }}
        </div>
        @endif


    </div>
    @endif
    <div class="d-xl-flex justify-content-between">
        <div class="ltopic  align-items-center udetail" style="position:relative;">
            <div class="unwanat text-center my-2">مختصر وضاحت</div>
            <div class="mr-2 text-wrap">
                <span class="mukhtasar">{{ $detail->detail }} <br>
                    <div style="color:blue;">حوالہ:{{ $yaad->hawala }}</div>
                </span>
            </div>
            @if($detail->detail)
            <button id="mazmoon" class="bbuttons my-1 ml-2 mazmon">مکمل مضمون پڑھیں</button>
            @endif
            @if($easy->easy)
            <button id="tasheel1" class="bbuttons my-1 ml-2 mazmon tasheel">تسہیل</button>
            @endif
            @if($yaad->pasaymanzar)
            <button id="pasaymanzar1" class="bbuttons my-1 mazmon pasaymanzar mx-2">پسِ
                منظر</button>
            @endif
            @if($yaad->result)
            <button id="result1" class="bbuttons my-1 mazmon pasaymanzar mx-2">نتیجہ</button>
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
        <div id="pasaymanzar2" class="ltopic align-items-center pasaymanzar2 udetail"
            style="position:absolute;width:96%;">
            <div class="unwanat text-center my-2">پسِ منظر</div>
            <div class="mr-2 text-wrap" title="{{ $yaad->pasaymanzar }}">
                <span class="mukhtasar">{{ $yaad->pasaymanzar }}
                </span>
            </div>
            <button id="pasaymanzar3" class="bbuttons my-1 ml-2 mazmon" style="position:relative;">بند کریں</button>
        </div>
        <div id="result2" class="ltopic align-items-center result2 udetail" style="position:absolute;width:96%;">
            <div class="unwanat text-center my-2">نتیجہ</div>
            <div class="mr-2 text-wrap" title="{{ $yaad->result }}">
                <span class="mukhtasar">{{ $yaad->result }}
                </span>
            </div>
            <button id="result3" class="bbuttons my-1 ml-2 mazmon">بند کریں</button>
        </div>
        <!-- <div class="stopic d-flex align-items-center">
                <div class="dot">
                    </div>
                    <div class="tabs mr-2" title="{{ $easy->taleem }}"><span class="unwanat">تعلیم:</span><span class="taleem">{{ $easy->taleem }}</span></div>
                </div> -->
    </div>
    @if($yaad->government_ref)
    <div class="d-xl-flex justify-content-between">
        <!-- <div class="ltopic w-50 d-flex align-items-center">
            <div class="dot">
            </div>
            <div class="mr-2 wazahat" title="{{ $yaad->government_ref }}"><span class="unwanat">حوالہ سرکاری
                    نصاب:</span><span class="easy->">{{ $yaad->government_ref }}</span></div>
        </div> -->
        <div class="ltopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="wazahat mr-2">
                <span class="unwanat tooltip1">
                    حوالہ سرکاری نصاب:
                    <span class="tooltiptext">
                        اس میں یہ بتایا گیا ہےکہ مختصر وضاحت میں مذکور بات کہاں سے لی گئی ہے۔
                    </span>
                </span>
                <span class="tooltip2">
                    <span class="easy">{{ $yaad->government_ref }}</span>
                    <span class="tooltiptext2">
                        {{ $yaad->government_ref }}
                    </span>
                </span>
            </div>
        </div>
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">جماعت:</span><span>{{ $easy->class }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات جماعت {{ $easy->class }} میں پڑھانی
                    چاہیے۔</span></div>
        </div> -->
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
        <!-- <div class="stopic d-flex align-items-center tooltipس">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">عمر:</span><span>{{ $detail->age }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات {{ $detail->age }} سال کی عمر میں پڑھانی
                    چاہیے۔</span></div>
        </div> -->
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
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
                </div>
                <div class="tabs mr-2" title="{{ $easy->amli_mashq }}"><span class="unwanat">عملی :</span><span>{{ $easy->amli_mashq }}</span><span class="tooltiptext">{{ $mahol->sunana }} سال کی عمر میں یہ بات سنانا مفید ہے۔</span></div>
            </div> -->
    </div>
    @endif
    <div class="d-xl-flex flex-wrap justify-content-between">
        <!-- <div class="stopic d-flex align-items-center tooltips">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">حکم:</span><span class="hukam">{{ $easy->hukam }}</span><span
                    class="tooltiptext">مختصر وضاحت میں ذکر کی گئی بات {{ $easy->hukam }} ہے۔</span></div>
        </div> -->
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

        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">حیثیت:</span><span>{{ $easy->hasiat }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات مسلمان کی {{ $easy->hasiat }} ذمہ داری ہے۔</span>
            </div>
        </div> -->
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

        @if($easy->qaida)
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">قاعدہ:</span><span class="qaida">{{ $easy->qaida }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور قاعدے
                    کا اطلاق {{ $easy->qaida }} طور پر ہوتا ہے۔</span></div>
        </div> -->
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
        @endif
        @if($easy->zamana)
        <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">زمانہ:</span><span>{{ $easy->zamana }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->zamana }} کے زمانے سے
                    ہے۔</span></div>
        </div>
        @endif
        @if($easy->shoba)
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
                        {{ $easy->shoba }}
                    </span>
                </span>
            </div>
        </div>
        @endif
        @if($easy->mukhatab)
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">مخاطب:</span><span class="tooltip2"><a
                        href="#">{{ $easy->mukhatab }}</a>
                    @if($easy->mukhatab == 'خواص')
                    <span class="tooltiptext2">
                        علم و عمل میں عوام سے آگے ہوں لیکن اس درجے میں نہیں کہ عوام ان
                        کی اقتداء کرے۔
                    </span>
                    @endif

                    @if($easy->mukhatab == 'مقتداء')
                    <span class="tooltiptext2">
                        جو متبع شریعت اور متبع سنت اس درجے میں ہوں کہ عوام ان کی اتباع
                        کرکے گمراہ نہ ہوں۔
                    </span>
                    @endif
                </span><span class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->mukhatab }} سے
                    ہے۔</span>

            </div>
        </div> -->
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
        @endif
        @if($easy->jins)
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">جنس:</span><span>{{ $easy->jins }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $easy->jins }} سے ہے۔</span></div>
        </div> -->
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
                        وہ احکام جن کا تعلق ہر جنس سے ہو۔
                        @endif
                    </span>
                </span>
            </div>
        </div>
        @endif
        @if($yaad->ahwal)
        <!-- <div class="stopic d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">احوال:</span><span>{{ $yaad->ahwal }}</span><span
                    class="tooltiptext">مختصر وضاحت میں مذکور بات کا تعلق {{ $yaad->ahwal }} سے ہے۔</span></div>
        </div> -->
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
                        {{ $yaad->ahwal }}
                    </span>
                </span>
            </div>
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

            <div>
                <span>{{ 'نیک صحبت میں درج ذیل کا ماحول مہیا کرنا ' }}</span>
            </div>
        </div>
        @if($mahol->sunana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سنانا:</span><span>{{ $mahol->sunana }}</span><span
                    class="tooltiptext">{{ $mahol->sunana }} سال کی عمر میں یہ بات سنانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->kehalwana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">کہلوانا:</span><span>{{ $mahol->kehalwana }}</span><span
                    class="tooltiptext">{{ $mahol->kehalwana }} سال کی عمر میں یہ بات کہلوانا مفید ہے۔</span>
            </div>
        </div> -->
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
        @endif
        @if($mahol->dekhana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">دکھانا:</span><span>{{ $mahol->dekhana }}</span><span
                    class="tooltiptext">{{ $mahol->dekhana }} سال کی عمر میں یہ بات دکھانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->mashq)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">مشق:</span><span>{{ $mahol->mashq }}</span><span
                    class="tooltiptext">{{ $mahol->mashq }} سال کی عمر میں اس بات کی مشق مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->batana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">بتانا:</span><span>{{ $mahol->batana }}</span><span
                    class="tooltiptext">{{ $mahol->batana }} سال کی عمر میں یہ بات بتانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->sikhana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سکھانا:</span><span>{{ $mahol->sikhana }}</span><span
                    class="tooltiptext">{{ $mahol->sikhana }} سال کی عمر میں یہ بات سکھانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->adat)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">عادت:</span><span>{{ $mahol->adat }}</span><span
                    class="tooltiptext">{{ $mahol->adat }} سال کی عمر میں اس بات کی عادت ڈالنا مفید ہے۔</span>
            </div>
        </div> -->
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
        @endif
        @if($mahol->samjhana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">سمجھانا:</span><span>{{ $mahol->samjhana }}</span><span
                    class="tooltiptext">{{ $mahol->samjhana }} سال کی عمر میں یہ بات سمجھانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($mahol->parhana)
        <!-- <div class="stopic smahol2 d-flex align-items-center tooltip1">
            <div class="dot">
            </div>
            <div class="tabs mr-2"><span class="unwanat">پڑھانا:</span><span>{{ $mahol->parhana }}</span><span
                    class="tooltiptext">{{ $mahol->parhana }} سال کی عمر میں یہ بات پڑھانا مفید ہے۔</span></div>
        </div> -->
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
        @endif
        @if($user)
        <!-- Button trigger modal -->
        <button type="button" class="bbuttons my-1 ml-2" style="position: absolute;bottom: 5px;left: 5px;"
            data-toggle="modal" data-target="#exampleModalLong">
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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle"> دلیل کے ساتھ اپنی رائے کا اظہار کریں</h5>
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
                        <div class="red my-3">
                            ہم معذرت خواہ ہیں کہ پورا مضمون صرف انرولڈ وزٹر پڑھ سکتے ہیں کیا آپ انرول ہونا چاہیں گے ؟
                        </div>
                        <a href="/jihaan4" target="_blank">
                            <button class="btn btn-primary">جی نہیں</button>
                        </a>
                        <a href="/jihaan3" target="_blank">
                            <button class="btn btn-primary">جی ہاں</button>
                        </a>
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
    <script>
    $('.bclose').click(function() {
        $('.detail2').hide();
    });
    $('.detail2').click(function(){
        $(this).addClass('detail2').removeClass('shrink');
    });
    </script>