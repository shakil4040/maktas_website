<!DOCTYPE html>
<html lang="en">

<head>
    <title>اسلام</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"  />
    <link href="/css/treeview.css" rel="stylesheet">
    <!-- Include Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- END CSS LINKS -->
</head>

<body>
    <div id="loader" style="display:none;width:100%;height:100%;position:absolute;z-index:9999999;background:#4548485c;position:fixed;" class="row justify-content-center align-items-center" role="status">
    <img  src="/assets/images/spinner.gif" width="5%" alt="loading">
    </div>
    <div class="preloader"></div>
    <div id="confirmation"></div>
    <div class="container">
        <div class="card card-primary">
            <div class="card-body">
                <div class="row">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    </div>
                    @endif
                    <div class="alert alert-danger print-delete-msg" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul></ul>
                    </div>
                    <div class="alert alert-success print-edit-msg" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul></ul>
                    </div>
                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="alert text-center alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="my-1">:message</div>
                        <div class="my-1">معلومات درست کرنے کے لیے نیچے دیے گئے بٹن پر کلک کریں۔</div>
                        <button class="btn btn-danger toggler my-2" type="button">کلک کریں</button>
                    </div>')) !!}
                    @endif
                    <span class="card card-success detail3" id="add">
                        {!! Form::open(['route'=>'add.category','id'=>'treeForm']) !!}
                        @csrf
                        <div class="d-flex justify-content-center my-1 ftitle">
                            <div class="title unwan py-1 px-2">
                                <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                    {!! Form::select('parent_id',$allCategories, old('parent_id'),
                                    ['class'=>'form-control fselect', 'placeholder'=>'بنیادی عنوان درج
                                    کریں','data-live-search'=>'true']) !!}
                                    <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('qaida') ? 'has-error' : '' }}">
                                        {!! Form::select('qaida',array('کلی' => 'کلی', 'جزوی' => 'جزوی', 'اکثری' =>
                                        'اکثری', 'استثنائی' => 'استثنائی'),old('qaida'), ['class'=>'form-control
                                        oselect', 'placeholder'=>'قاعدہ درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('qaida') }}</span>
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

                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                        {!! Form::text('title', old('title'), ['class'=>'form-control',
                                        'placeholder'=>'ذیلی عنوان درج کریں','required'=>'required']) !!}
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('taleem') ? 'has-error' : '' }}">
                                        {!! Form::select('taleem',array('علمی' => 'علمی', 'عملی' =>
                                        'عملی'),old('taleem'), ['class'=>'form-control oselect', 'placeholder'=>'تعلیم
                                        درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('taleem') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('rahe_adal') ? 'has-error' : '' }}">
                                        {!! Form::text('rahe_adal',old('rahe_adal'), ['class'=>'form-control oselect',
                                        'placeholder'=>'راہِ عدل درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('rahe_adal') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('detail') ? 'has-error' : '' }}">
                                        {!! Form::text('detail', old('detail'), ['class'=>'form-control',
                                        'placeholder'=>'مختصر وضاحت درج کریں','required'=>'required']) !!}
                                        <span class="text-danger">{{ $errors->first('detail') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('amli_mashq') ? 'has-error' : '' }}">
                                        {!! Form::select('amli_mashq',array('مشقی' => 'مشقی', 'غیر مشقی' => 'غیر
                                        مشقی'),old('amli_mashq'), ['class'=>'form-control oselect', 'placeholder'=>'عملی
                                        درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('amli_mashq') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('hukam') ? 'has-error' : '' }}">
                                        {!! Form::select('hukam',array('فرض' => 'فرض','فرض عین' => 'فرض عین','فرض کفایہ'
                                        => 'فرض کفایہ','واجب' => 'واجب','سنت' => 'سنت','سنت مؤکدہ' => 'سنت مؤکدہ','سنت
                                        غیر مؤکدہ' => 'سنت غیر مؤکدہ','نفل' => 'نفل','مستحب' => 'مستحب','افضل' =>
                                        'افضل','جائز' => 'جائز','مباح' => 'مباح', 'حرام' => 'حرام','مکروہ تحریمی' =>
                                        'مکروہ تحریمی', 'مکروہ تنزیہی' => 'مکروہ تنزیہی','ناجائز' => 'ناجائز','بنیادی'
                                        => 'بنیادی', 'دفعِ مضرت' => 'دفعِ مضرت','ابہام' => 'ابہام'),old('hukam'),
                                        ['class'=>'form-control oselect', 'placeholder'=>'حکم درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('hukam') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('hawala') ? 'has-error' : '' }}">
                                        {!! Form::text('hawala', old('hawala'), ['class'=>'form-control',
                                        'placeholder'=>'حوالہ درج کریں','required'=>'required']) !!}
                                        <span class="text-danger">{{ $errors->first('hawala') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('yad_dehani') ? 'has-error' : '' }}">
                                        {!! Form::select('yad_dehani',array('عملی تکرار' => 'عملی تکرار','علمی تکرار' =>
                                        'علمی تکرار', 'ایک بار' => 'ایک بار'),old('yad_dehani'), ['class'=>'form-control
                                        oselect', 'placeholder'=>'یاد دہانی درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('yad_dehani') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('mukhatab') ? 'has-error' : '' }}">
                                        {!! Form::select('mukhatab',array('خواص' => 'خواص', 'مقتداء' =>
                                        'مقتداء'),old('mukhatab'), ['class'=>'form-control oselect',
                                        'placeholder'=>'مخاطب درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('mukhatab') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('easy') ? 'has-error' : '' }}">
                                        {!! Form::text('easy', old('easy'), ['class'=>'form-control',
                                        'placeholder'=>'تسہیل درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('easy') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('kitni_takrar') ? 'has-error' : '' }}">
                                        {!! Form::number('kitni_takrar', old('kitni_takrar'),
                                        ['class'=>'form-control','min'=>'0', 'placeholder'=>'کتنی تکرار درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('kitni_takrar') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('jins') ? 'has-error' : '' }}">
                                        {!! Form::select('jins',array('مرد' => 'مرد','عورت' => 'عورت'),old('jins'),
                                        ['class'=>'form-control oselect', 'placeholder'=>'جنس درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('jins') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('rafe_ishkal') ? 'has-error' : '' }}">
                                        {!! Form::text('rafe_ishkal', old('rafe_ishkal'), ['class'=>'form-control',
                                        'placeholder'=>'رفعِ اشکال درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('rafe_ishkal') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('revision') ? 'has-error' : '' }}">
                                        {!! Form::select('revision',array('ضروری' => 'ضروری','غیر ضروری' => 'غیر
                                        ضروری'),old('revision'), ['class'=>'form-control oselect',
                                        'placeholder'=>'دہرائی درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('revision') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('hasiat') ? 'has-error' : '' }}">
                                        {!! Form::select('hasiat',array('انفرادی' => 'انفرادی','اجتماعی' =>
                                        'اجتماعی'),old('hasiat'), ['class'=>'form-control oselect',
                                        'placeholder'=>'حیثیت درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('hasiat') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('husool') ? 'has-error' : '' }}">
                                        {!! Form::text('husool', old('husool'), ['class'=>'form-control',
                                        'placeholder'=>'حصول کا طریقہ درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('husool') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('shaz') ? 'has-error' : '' }}">
                                        {!! Form::text('shaz', old('shaz'), ['class'=>'form-control',
                                        'placeholder'=>'شاذ مسائل درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('shaz') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('shoba') ? 'has-error' : '' }}">
                                        {!! Form::text('shoba', old('shoba'), ['class'=>'form-control',
                                        'placeholder'=>'شعبہ درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('shoba') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('tamheed_khas') ? 'has-error' : '' }}">
                                        {!! Form::text('tamheed_khas', old('tamheed_khas'), ['class'=>'form-control',
                                        'placeholder'=>'تمہیدِ خاص درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('tamheed_khas') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('age_sr') ? 'has-error' : '' }}">
                                        {!! Form::number('age_sr', old('age_sr'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'بلحاظ عمر درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('age_sr') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                                        {!! Form::number('age', old('age'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'عمر درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('age') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
                                        {!! Form::text('area', old('area'), ['class'=>'form-control',
                                        'placeholder'=>'علاقہ درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('area') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('course_no') ? 'has-error' : '' }}">
                                        {!! Form::number('course_no', old('course_no'),
                                        ['class'=>'form-control','min'=>'0', 'placeholder'=>'نصابی نمبر درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('course_no') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                                        {!! Form::number('class', old('class'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'جماعت درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('class') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltopic d-flex align-items-center">
                                <div class="mr-1 formo">
                                    <div class="form-group {{ $errors->has('muharik') ? 'has-error' : '' }}">
                                        {!! Form::text('muharik', old('muharik'), ['class'=>'form-control',
                                        'placeholder'=>'محرکات و نظریات درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('muharik') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('sr') ? 'has-error' : '' }}">
                                        {!! Form::number('sr', old('sr'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'نمبر شمار درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('sr') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('ahwal') ? 'has-error' : '' }}">
                                        {!! Form::text('ahwal', old('ahwal'), ['class'=>'form-control',
                                        'placeholder'=>'احوال درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('ahwal') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('sunana', old('sunana'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'سنانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('sunana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('kehalwana', old('kehalwana'),
                                        ['class'=>'form-control','min'=>'0', 'placeholder'=>'کہلوانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('kehalwana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('dekhana', old('dekhana'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'دکھانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('dekhana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('abrar_id', old('abrar_id'),
                                        ['class'=>'form-control','min'=>'0', 'placeholder'=>'اح درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('abrar_id') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('zamana') ? 'has-error' : '' }}">
                                        {!! Form::select('zamana',array('قبل آدمؑ' => 'قبل آدمؑ','حضرت آدمؑ سے حضرت
                                        نوحؑ تک' => 'حضرت آدمؑ سے حضرت نوحؑ تک','حضرت نوحؑ سے حضرت ابراہیمؑ' => 'حضرت
                                        نوحؑ سے حضرت ابراہیمؑ تک','حضرت ابراہیمؑ سے حضرت موسیٰؑ تک' => 'حضرت ابراہیمؑ سے
                                        حضرت موسیٰؑ تک','حضرت موسیٰؑ سے حضرت عیسیٰؑ تک' => 'حضرت موسیٰؑ سے حضرت عیسیٰئ
                                        تک','حضرت عیسیٰؑ سے آپ ﷺ تک' => 'حضرت عیسیٰؑ سے آپ ﷺ تک','آپ ﷺ کے زمانے سے
                                        قیامت تک' => 'آپ ﷺ کے زمانے قیامت تک','قیامت کے بعد تک' => 'قیامت کے بعد
                                        تک'),old('zamana'), ['class'=>'form-control oselect', 'placeholder'=>'زمانہ درج
                                        کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('zamana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('mashq', old('mashq'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'مشق کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('mashq') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('batana', old('batana'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'بتانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('batana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('sikhana', old('sikhana'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'سکھانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('sikhana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('asif_id') ? 'has-error' : '' }}">
                                        {!! Form::number('asif_id', old('asif_id'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'آص درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('asif_id') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-flex justify-content-between">
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('taluq') ? 'has-error' : '' }}">
                                        {!! Form::select('taluq',array('ظاہری' => 'ظاہری','باطنی' =>
                                        'باطنی'),old('taluq'), ['class'=>'form-control oselect', 'placeholder'=>'تعلق
                                        درج کریں']) !!}
                                        <span class="text-danger">{{ $errors->first('taluq') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('adat', old('adat'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'عادت کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('adat') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('samjhana', old('samjhana'),
                                        ['class'=>'form-control','min'=>'0', 'placeholder'=>'سمجھانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('samjhana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic emahol d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                                        {!! Form::number('parhana', old('parhana'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'پڑھانے کی عمر']) !!}
                                        <span class="text-danger">{{ $errors->first('parhana') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="stopic d-flex align-items-center">
                                <div class="tabs mr-1">
                                    <div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                                        {!! Form::number('id', old('id'), ['class'=>'form-control','min'=>'0',
                                        'placeholder'=>'آئی ڈی درج کریں','required'=>'required','disabled']) !!}
                                        <span class="text-danger text-wrap">{{ $errors->first('id') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <div>
                                <button class="bbuttons my-1 ml-2">اندراج کریں</button>
                                <button class="bbuttons my-1 ml-3" type="button" id="fclose">بند کریں</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </span>
                    <div id="comment2">

                    </div>
                    <div id="edit2">

                    </div>
                    <div id="div1">

                    </div>

                    <div class="col-md-12 nav-col">
                        <div class="row scroll-topics navigation_bar">
                            <div id="ctab1" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct1_title"></div>
                            </div>
                            <div id="ctab2" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct2_title"></div>
                            </div>
                            <div id="ctab3" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct3_title"></div>
                            </div>
                            <div id="ctab4" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct4_title"></div>
                            </div>
                            <div id="ctab5" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct5_title"></div>
                            </div>
                            <div id="ctab6" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct6_title"></div>
                            </div>
                            <div id="ctab7" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct7_title"></div>
                            </div>
                            <div id="ctab8" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct8_title"></div>
                            </div>
                            <div id="ctab9" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics ctitle" id="ct9_title"></div>
                            </div>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal" style="position: fixed;left: 0px;z-index: 999999999;" class="btn btn-success">اپنا نصاب بنائیں</button>
                        <div class="title islam1 mr-1">
                            <h1 style="font-size:35px;margin-bottom:1.5rem;">اسلام</h1>
                        </div>
                        <div class="d-flex navw">
                            <input id="searcht" class="mr-1 input-field-size" style="padding: 0px 10px;" placeholder="نظر آنے والے عنوانات میں  تلاش کرنے کے لیے یہاں لکھیں" type="search">
                            <button id="searchButton" class="btn ml-1 mr-1 btn-primary">@lang("tree.Search")<i class="fa fa-search mr-1"></i></button>
                            <button id="searchb" title="مکطس کے تمام عنوانات  میں تلاش کرنے کے لیے یہ بٹن دبائیں" class="btn btn-success"><i class="fa fa-search"></i></button>
                        </div>
                        @if(!empty(auth()->user()) && auth()->user()->isMember())
                        <div class="mt-2">
                            <button data-toggle="modal" data-target="#addTopicModal" class="btn btn-info">نیا عنوان درج کریں</button>
                        </div>
                        @endif
                        <div id="sframe" class="col-md-6" style="position: absolute;left:5px;top:53px;z-index: 99999;height:55%">
                            <i id="frclose" style="position: absolute;left: 34px;top: 15px;" class="fa fa-close"></i>
                            <iframe  src="/allSearch" height="100%" width="100%" title="Iframe Example"></iframe>
                        </div>
                        <ul id="tree1">
                            @php
                            $counter =0;
                            @endphp
                            @foreach($categories as $category)
                            <div class="row">
                                <div class="col-md-12">
                                    <li title="{{ $category->title }}" class="list_color level-1">
                                        <span class="detail1">
                                            <div class="d-flex align-items-center">
                                                @php
                                                $counter++;
                                                @endphp
                                                <div class="dot2 d-flex align-items-center" onclick="getchilds({{ $category->id }},1, '{{ "1#". $category->title }}')">
                                                    @if(count($category->childs))
                                                    <i class="fa fa-plus detail1 iicon " id="{{ $category->id }}" aria-hidden="true"></i>
                                                    @endif
                                                </div>
                                                <div id="{{ $category->title }}" onclick="setParentTitle('{{ $category->title }}')" class="ctitle list d-flex justify-content-between align-items-center">
                                                    {{ $category->title }}
                                                    @if($category->mahol && $category->mahol->status == 'Pending')
                                                    <span style="background: #ffc107;padding: 0px 11px;color: #ffffff;font-weight: 500;font-size: 19px;border-radius: 23px;">
                                                        {{'...Pending'}}
                                                    </span>
                                                    @endif
                                                    @if(!empty(auth()->user()) && auth()->user()->isAdmin())
                                                    @if(count($category->childs) == null)
                                                    <div class="d-flex">
                                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                                        <i class="fa fa-edit mx-2 sedit"></i>
                                                        <i class="fa fa-times-circle mx-2 delete"></i>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex">
                                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                                    </div>
                                                    @endif
                                                    @if(count($category->childs) == null)
                                                        <div class="d-flex">
                                                            @if(auth()->check() && auth()->user()->isMember())
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                                <i class="fa fa-times-circle mx-2 delete"></i>
                                                            @endif
                                                            @if(auth()->check() && (auth()->user()->isMember() && auth()->user()->userable->is_approve == 0))
                                                                <i class="fa fa-edit mx-2 sedit"></i>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                                @if(!empty(auth()->user()) && auth()->user()->isAdmin())
                                                <div>
                                                    @if($category->status === 'pending')
                                                        <span style="margin-right: 10px;">Status: 
                                                            <span style="color: orange;">{{ $category->status }}</span>
                                                        </span>
                                                    @endif
                                                    @if($category->added_by)
                                                        <span style="margin-right: 10px;">Added By: {{ $category->added_by }}
                                                    @endif
                                                </div>
                                                @endif
                                                <div class="cid d-none">{{ $category->id }}</div>
                                                <div class="navigation d-none">{{"1#". $category->title }}</div>
                                                <div class="sr d-none">{{ $category->sr }}</div>
                                                <div class="parentId d-none">{{ $category->parent_id }}</div>
                                                <div class="admin d-none">{{ !empty(auth()->user()) ??auth()->user()->isAdmin() }}</div>
                                                <div class="user d-none">{{ auth()->user() }}</div>
                                                @auth()
                                                <div class="userId d-none">{{ auth()->user()->userable->id }}</div>
                                                @endauth
                                                @if(auth()->check() && auth()->user()->isMember())
                                                <div class="memberId d-none">{{ auth()->user()->userable->id }}</div>
                                                @endif
                                            </div>
                                        </span>
                                        @if(count($category->childs))
                                        <div class="child-div" id="child-{{ $category->id }}">
                                        </div>
                                        @endif
                                    </li>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" style="direction: rtl;font-family:'Noto Nastaliq Urdu', serif;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <h5 class="modal-title" id="exampleModalLabel">براہِ مہربانی مندرجہ ذیل معلومات فراہم کریں</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="/api/course"  enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" type="text" placeholder="آپ کا نام" name="name">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" min="0" type="number" placeholder="آپ کی عمر" name="age">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" type="text" placeholder="آپ کا شعبہ" name="occupation" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">بند کریں</button>
            <button type="submit" class="btn btn-primary">درج کریں</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal to add new topics -->
<div class="modal fade" style="direction: rtl; font-family: 'Noto Nastaliq Urdu', serif;" id="addTopicModal" tabindex="-1" aria-labelledby="addTopicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">نیا عنوان درج کریں</h5>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm">
                    <!-- Dropdown Field -->
                    <div class="form-group">
                        <label class="text-right d-block" for="category">بنیادی عنوان</label>
                        <select id="titleFilter" name="parentTitleId" class="form-control form-select" aria-label=".form-select">
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-right d-block" for="title">عنوان</label>
                        <input type="text" class="form-control my-2 py-3" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label class="text-right d-block" for="detail">مختصر وضاحت</label>
                        <textarea class="form-control my-2" id="detail" name="detail" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-right d-block" for="hawala">Hawala</label>
                        <input type="text" class="form-control my-2 py-3" id="hawala" name="hawala" required>
                    </div>
                    <div class="form-group">
                        <label class="text-right d-block" for="easy">Easy</label>
                        <input type="text" class="form-control my-2 py-3" id="easy" name="easy" required>
                    </div>
                    <div class="form-group">
                        <label class="text-right d-block" for="sunana">Sunana</label>
                        <input type="text" class="form-control my-2 py-3" id="sunana" name="sunana">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بند کریں</button>
                        <button type="submit" class="btn btn-primary">درج کریں</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JQUERY JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Initialize the Select2 component
        $('#titleFilter').select2({
            ajax: {
                url: "{{ route('admin.filterTitle') }}",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        title: params.term // search term
                    };
                },
                processResults: function(data) {
                    // Transform the response into the format expected by Select2
                    return {

                        results: data.filterTitles.map(function(item) {
                            return {
                                id: item.id, // Adjust as needed based on your response data
                                text: item.title // Adjust as needed based on your response data
                            };
                        })
                    };
                },
                cache: true
            },
            placeholder: "@lang("tree.select a title")",
            minimumInputLength: 1,
            dir: "rtl",
        });
    });
</script>
    <script>
        /**
         * Global Variables
         */
        let admin = null;
        let user = null;
        let userId = 0;
        @auth()
            admin = "{{ auth()->user()->getAdmin() }}";
            user = "{{ auth()->user()->getMember() }}";
            userId = "{{ auth()->user()->getMember() ? auth()->user()->getMember()->id : 0  }}";
        @endauth
    </script>
    <script src="/js/treeview.js"></script>
    <script>
        $(document).ajaxSend(function(event, request, settings) {
            $('#loader').show();
        });
        $(document).ajaxComplete(function(event, request, settings) {
            $('#loader').hide();
        });
    </script>
    <script type="application/javascript">
        function setParentTitle(title) {
            $(".nav-title").html("");
            $("#ct1_title").html('<a href="#' + title + '">' + title + '</a>');
            $("#ct2_title").html("");
            $("#ct3_title").html("");
            $("#ct4_title").html("");
            $("#ct5_title").html("");
            $("#ct6_title").html("");
            $("#ct7_title").html("");
            $("#ct8_title").html("");
        }
        $(".nav-title").click(function() {
            $('.detail2').addClass('shrink').removeClass('detail2');
            $('.btitle').addClass('shtitle');
        });
        $('#sframe').hide();
        $('#searchb').click(function(){
            $('#sframe').show();
        });
        $('#frclose').click(function(){
            $('#sframe').hide();
        });
    </script>
    <script>
        var header = document.getElementById("tree1");
var btns = header.getElementsByClassName("list");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}

document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('addCategoryForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch('/add-topic', { // replace with your actual route
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                if (result.error) {
                    alert('Error: ' + result.error.join(', '));
                } else {
                    const modalElement = document.getElementById('addTopicModal');
                    const modal = new bootstrap.Modal(modalElement);
                    alert('Success: ' + result.success);
                    modal.hide();
                    setTimeout(() => {
                        window.location.reload(); // Delay reload to ensure modal has time to close
                    }, 500);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
    </script>
</body>

</html>