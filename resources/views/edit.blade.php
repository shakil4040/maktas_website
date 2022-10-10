
<span class="card card-success detail3" id="edit">
    {!! Form::open(['route'=>'add.category','id'=>'editForm','method'=>'post']) !!}
    @method('PATCH')
    @csrf
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="title unwan py-1 px-2">
            <div class="form-group">
                {!! Form::select('parent_id',$allCategories, $tree->parent_id, ['class'=>'form-control fselect', 'placeholder'=>'بنیادی عنوان درج کریں','data-live-search'=>'true']) !!}
            </div>
        </div>
    </div>

    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('qaida',array('کلی' => 'کلی', 'جزوی' => 'جزوی', 'اکثری' => 'اکثری', 'استثنائی' => 'استثنائی'),$easy->qaida, ['class'=>'form-control oselect', 'placeholder'=>'قاعدہ درج کریں']) !!}
                </div>
            </div>
        </div>

        <div class="alert alert-danger print-error-msg" style="display:none">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul></ul>
        </div>
        <div class="alert alert-success print-success-msg" style="display:none">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul></ul>
        </div>

        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('taleem',array('علمی' => 'علمی', 'عملی' => 'عملی'),$easy->taleem, ['class'=>'form-control oselect', 'placeholder'=>'تعلیم درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('rahe_adal',array('قانوناً' => 'قانوناً', 'دیانتاً' => 'دیانتاً','احساناً' => 'احساناً', 'مقصود' => 'مقصود','مقصود بالذات' => 'مقصود بالذات', 'ذرائع' => 'ذرائع'),$easy->rahe_adal, ['class'=>'form-control oselect', 'placeholder'=>'راہِ عدل درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('title', $tree->title, ['class'=>'form-control', 'placeholder'=>'ذیلی عنوان درج کریں','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                {!! Form::select('amli_mashq',array('مشقی' => 'مشقی', 'غیر مشقی' => 'غیر مشقی'),$easy->amli_mashq, ['class'=>'form-control oselect', 'placeholder'=>'عملی درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('hukam',array('فرض' => 'فرض','فرض عین' => 'فرض عین','فرض کفایہ' => 'فرض کفایہ','واجب' => 'واجب','سنت' => 'سنت','سنت مؤکدہ' => 'سنت مؤکدہ','سنت غیر مؤکدہ' => 'سنت غیر مؤکدہ','نفل' => 'نفل','مستحب' => 'مستحب','افضل' => 'افضل','جائز' => 'جائز','مباح' => 'مباح', 'حرام' => 'حرام','مکروہ تحریمی' => 'مکروہ تحریمی', 'مکروہ تنزیہی' => 'مکروہ تنزیہی','ناجائز' => 'ناجائز','بنیاد' => 'بنیاد', 'دفعِ مضرت' => 'دفعِ مضرت','ابہام' => 'ابہام'),$easy->hukam, ['class'=>'form-control oselect', 'placeholder'=>'حکم درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('detail',$detail->detail, ['class'=>'form-control', 'placeholder'=>'مختصر وضاحت درج کریں','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('yad_dehani',array('عملی تکرار' => 'عملی تکرار','علمی تکرار' => 'علمی تکرار', 'ایک بار' => 'ایک بار'),$yaad->yaad_dehani, ['class'=>'form-control oselect', 'placeholder'=>'یاد دہانی درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('mukhatab',array('عوام' => 'عوام','خواص' => 'خواص', 'مقداء' => 'مقداء'),$easy->mukhatab, ['class'=>'form-control oselect', 'placeholder'=>'مخاطب درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('hawala', $yaad->hawala, ['class'=>'form-control', 'placeholder'=>'حوالہ درج کریں','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('kitni_takrar', $yaad->kitni_takrar, ['class'=>'form-control','min'=>'0', 'placeholder'=>'کتنی تکرار درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('jins',array('مرد' => 'مرد','عورت' => 'عورت', 'دونوں' => 'دونوں'),$easy->jins, ['class'=>'form-control oselect', 'placeholder'=>'جنس درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('easy', $easy->easy, ['class'=>'form-control', 'placeholder'=>'تسہیل درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                {!! Form::select('revision',array('ضروری' => 'ضروری','غیر ضروری' => 'غیر ضروری'),$yaad->revision, ['class'=>'form-control oselect', 'placeholder'=>'دہرائی درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('hasiat',array('انفرادی' => 'انفرادی','اجتماعی' => 'اجتماعی'),$easy->hasiat, ['class'=>'form-control oselect', 'placeholder'=>'حیثیت درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('rafe_ishkal', $easy->rafe_ishkal, ['class'=>'form-control', 'placeholder'=>'رفعِ اشکال درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::text('shaz', $yaad->shaz, ['class'=>'form-control', 'placeholder'=>'شاذ مسائل درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::text('shoba', $easy->shoba, ['class'=>'form-control', 'placeholder'=>'شعبہ درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('husool', $easy->husool, ['class'=>'form-control', 'placeholder'=>'حصول کا طریقہ درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('age_sr', $detail->age_sr, ['class'=>'form-control','min'=>'0', 'placeholder'=>'بلحاظ عمر درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('age', $detail->age, ['class'=>'form-control','min'=>'0', 'placeholder'=>'عمر درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('tamheed_khas', $easy->tamheed_khas, ['class'=>'form-control', 'placeholder'=>'تمہیدِ خاص درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('course_no', $detail->course_no, ['class'=>'form-control','min'=>'0', 'placeholder'=>'نصابی نمبر درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('class', $easy->class, ['class'=>'form-control','min'=>'0', 'placeholder'=>'جماعت درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('tamheed_am', $easy->tamheed_am, ['class'=>'form-control', 'placeholder'=>'تمہیدِ عام درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('sr', $tree->sr, ['class'=>'form-control','min'=>'0', 'placeholder'=>'نمبر شمار درج کریں','disabled']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::text('ahwal', $yaad->ahwal, ['class'=>'form-control', 'placeholder'=>'احوال درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="ltopic d-flex align-items-center">
            <div class="mr-1 formo">
                <div class="form-group">
                    {!! Form::text('muharik', $easy->muharik, ['class'=>'form-control', 'placeholder'=>'محرکات و نظریات درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('abrar_id', $detail->abrar_id, ['class'=>'form-control','min'=>'0', 'placeholder'=>'اح درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                {!! Form::select('zamana',array('قبل آدمؑ' => 'قبل آدمؑ','حضرت آدمؑ سے حضرت نوحؑ تک' => 'حضرت آدمؑ سے حضرت نوحؑ تک','حضرت نوحؑ سے حضرت ابراہیمؑ' => 'حضرت نوحؑ سے حضرت ابراہیمؑ تک','حضرت ابراہیمؑ سے حضرت موسیٰؑ تک' => 'حضرت ابراہیمؑ سے حضرت موسیٰؑ تک','حضرت موسیٰؑ سے حضرت عیسیٰؑ تک' => 'حضرت موسیٰؑ سے حضرت عیسیٰئ تک','حضرت عیسیٰؑ سے آپ ﷺ تک' => 'حضرت عیسیٰؑ سے آپ ﷺ تک','آپ ﷺ کے زمانے تک' => 'آپ ﷺ کے زمانے تک','قیامت کے بعد تک' => 'قیامت کے بعد تک'),$easy->zamana, ['class'=>'form-control oselect', 'placeholder'=>'زمانہ درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('asif_id', $detail->asif_id, ['class'=>'form-control','min'=>'0', 'placeholder'=>'آص درج کریں']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-flex justify-content-between">
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::select('taluq',array('ظاہری' => 'ظاہری','باطنی' => 'باطنی'),$easy->taluq, ['class'=>'form-control oselect', 'placeholder'=>'تعلق درج کریں']) !!}
                </div>
            </div>
        </div>
        <div class="stopic d-flex align-items-center">
            <div class="tabs mr-1">
                <div class="form-group">
                    {!! Form::number('id', $tree->id, ['class'=>'form-control','min'=>'0', 'placeholder'=>'آئی ڈی درج کریں','required'=>'required','disabled']) !!}
                </div>
            </div>
        </div>
    </div>
    <div id="treeid" class="d-none">{{$tree->id}}</div>
    <div class="d-flex justify-content-end align-items-center">
        <div>
            <button class="bbuttons my-1 ml-2" id="update">تبدیل کریں</button>
            <button class="bbuttons my-1 ml-3" type="button" id="eclose">بند کریں</button>
        </div>
    </div>
    {!! Form::close() !!}
</span>

<script src="/js/treeviewPart.js"></script>