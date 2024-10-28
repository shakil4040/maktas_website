<!DOCTYPE html>
<html>

<head>
    <title>اسلام</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="/css/treeview.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <script>
     $(document).ready(function(){        
   $('#exampleModal').modal('show');
    }); 
</script>

</head>

<body>
    <div class="preloader"></div>
    <div id="confirmation"></div>

    <div class="container">

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
                        {!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control fselect', 'placeholder'=>'بنیادی عنوان درج کریں','data-live-search'=>'true']) !!}
                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('qaida') ? 'has-error' : '' }}">
                            {!! Form::select('qaida',array('کلی' => 'کلی', 'جزوی' => 'جزوی', 'اکثری' => 'اکثری', 'استثنائی' => 'استثنائی'),old('qaida'), ['class'=>'form-control oselect', 'placeholder'=>'قاعدہ درج کریں']) !!}
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
                            {!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'ذیلی عنوان درج کریں','required'=>'required']) !!}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('taleem') ? 'has-error' : '' }}">
                            {!! Form::select('taleem',array('علمی' => 'علمی', 'عملی' => 'عملی'),old('taleem'), ['class'=>'form-control oselect', 'placeholder'=>'تعلیم درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('taleem') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('rahe_adal') ? 'has-error' : '' }}">
                            {!! Form::text('rahe_adal',old('rahe_adal'), ['class'=>'form-control oselect', 'placeholder'=>'راہِ عدل درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('rahe_adal') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('detail') ? 'has-error' : '' }}">
                            {!! Form::text('detail', old('detail'), ['class'=>'form-control', 'placeholder'=>'مختصر وضاحت درج کریں','required'=>'required']) !!}
                            <span class="text-danger">{{ $errors->first('detail') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('amli_mashq') ? 'has-error' : '' }}">
                            {!! Form::select('amli_mashq',array('مشقی' => 'مشقی', 'غیر مشقی' => 'غیر مشقی'),old('amli_mashq'), ['class'=>'form-control oselect', 'placeholder'=>'عملی درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('amli_mashq') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('hukam') ? 'has-error' : '' }}">
                            {!! Form::select('hukam',array('فرض' => 'فرض','فرض عین' => 'فرض عین','فرض کفایہ' => 'فرض کفایہ','واجب' => 'واجب','سنت' => 'سنت','سنت مؤکدہ' => 'سنت مؤکدہ','سنت غیر مؤکدہ' => 'سنت غیر مؤکدہ','نفل' => 'نفل','مستحب' => 'مستحب','افضل' => 'افضل','جائز' => 'جائز','مباح' => 'مباح', 'حرام' => 'حرام','مکروہ تحریمی' => 'مکروہ تحریمی', 'مکروہ تنزیہی' => 'مکروہ تنزیہی','ناجائز' => 'ناجائز','بنیادی' => 'بنیادی', 'دفعِ مضرت' => 'دفعِ مضرت','ابہام' => 'ابہام'),old('hukam'), ['class'=>'form-control oselect', 'placeholder'=>'حکم درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('hukam') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('hawala') ? 'has-error' : '' }}">
                            {!! Form::text('hawala', old('hawala'), ['class'=>'form-control', 'placeholder'=>'حوالہ درج کریں','required'=>'required']) !!}
                            <span class="text-danger">{{ $errors->first('hawala') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('yad_dehani') ? 'has-error' : '' }}">
                            {!! Form::select('yad_dehani',array('عملی تکرار' => 'عملی تکرار','علمی تکرار' => 'علمی تکرار', 'ایک بار' => 'ایک بار'),old('yad_dehani'), ['class'=>'form-control oselect', 'placeholder'=>'یاد دہانی درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('yad_dehani') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('mukhatab') ? 'has-error' : '' }}">
                            {!! Form::select('mukhatab',array('خواص' => 'خواص', 'مقتداء' => 'مقتداء'),old('mukhatab'), ['class'=>'form-control oselect', 'placeholder'=>'مخاطب درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('mukhatab') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('easy') ? 'has-error' : '' }}">
                            {!! Form::text('easy', old('easy'), ['class'=>'form-control', 'placeholder'=>'تسہیل درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('easy') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('kitni_takrar') ? 'has-error' : '' }}">
                            {!! Form::number('kitni_takrar', old('kitni_takrar'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'کتنی تکرار درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('kitni_takrar') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('jins') ? 'has-error' : '' }}">
                            {!! Form::select('jins',array('مرد' => 'مرد','عورت' => 'عورت'),old('jins'), ['class'=>'form-control oselect', 'placeholder'=>'جنس درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('jins') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('rafe_ishkal') ? 'has-error' : '' }}">
                            {!! Form::text('rafe_ishkal', old('rafe_ishkal'), ['class'=>'form-control', 'placeholder'=>'رفعِ اشکال درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('rafe_ishkal') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('revision') ? 'has-error' : '' }}">
                            {!! Form::select('revision',array('ضروری' => 'ضروری','غیر ضروری' => 'غیر ضروری'),old('revision'), ['class'=>'form-control oselect', 'placeholder'=>'دہرائی درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('revision') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('hasiat') ? 'has-error' : '' }}">
                            {!! Form::select('hasiat',array('انفرادی' => 'انفرادی','اجتماعی' => 'اجتماعی'),old('hasiat'), ['class'=>'form-control oselect', 'placeholder'=>'حیثیت درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('hasiat') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('husool') ? 'has-error' : '' }}">
                            {!! Form::text('husool', old('husool'), ['class'=>'form-control', 'placeholder'=>'حصول کا طریقہ درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('husool') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('shaz') ? 'has-error' : '' }}">
                            {!! Form::text('shaz', old('shaz'), ['class'=>'form-control', 'placeholder'=>'شاذ مسائل درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('shaz') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('shoba') ? 'has-error' : '' }}">
                            {!! Form::text('shoba', old('shoba'), ['class'=>'form-control', 'placeholder'=>'شعبہ درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('shoba') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('tamheed_khas') ? 'has-error' : '' }}">
                            {!! Form::text('tamheed_khas', old('tamheed_khas'), ['class'=>'form-control', 'placeholder'=>'تمہیدِ خاص درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('tamheed_khas') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('age_sr') ? 'has-error' : '' }}">
                            {!! Form::number('age_sr', old('age_sr'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'بلحاظ عمر درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('age_sr') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                            {!! Form::number('age', old('age'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'عمر درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('age') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
                            {!! Form::text('area', old('area'), ['class'=>'form-control', 'placeholder'=>' علاقہ درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('area') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('course_no') ? 'has-error' : '' }}">
                            {!! Form::number('course_no', old('course_no'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'نصابی نمبر درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('course_no') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                            {!! Form::number('class', old('class'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'جماعت درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('class') }}</span>
                        </div>
                    </div>
                </div>
                <div class="ltopic d-flex align-items-center">
                    <div class="mr-1 formo">
                        <div class="form-group {{ $errors->has('muharik') ? 'has-error' : '' }}">
                            {!! Form::text('muharik', old('muharik'), ['class'=>'form-control', 'placeholder'=>'محرکات و نظریات درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('muharik') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('sr') ? 'has-error' : '' }}">
                            {!! Form::number('sr', old('sr'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'نمبر شمار درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('sr') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('ahwal') ? 'has-error' : '' }}">
                            {!! Form::text('ahwal', old('ahwal'), ['class'=>'form-control', 'placeholder'=>'احوال درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('ahwal') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('sunana', old('sunana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'سنانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('sunana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('kehalwana', old('kehalwana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'کہلوانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('kehalwana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('dekhana', old('dekhana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'دکھانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('dekhana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('abrar_id', old('abrar_id'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'اح درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('abrar_id') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('zamana') ? 'has-error' : '' }}">
                            {!! Form::select('zamana',array('قبل آدمؑ' => 'قبل آدمؑ','حضرت آدمؑ سے حضرت نوحؑ تک' => 'حضرت آدمؑ سے حضرت نوحؑ تک','حضرت نوحؑ سے حضرت ابراہیمؑ' => 'حضرت نوحؑ سے حضرت ابراہیمؑ تک','حضرت ابراہیمؑ سے حضرت موسیٰؑ تک' => 'حضرت ابراہیمؑ سے حضرت موسیٰؑ تک','حضرت موسیٰؑ سے حضرت عیسیٰؑ تک' => 'حضرت موسیٰؑ سے حضرت عیسیٰئ تک','حضرت عیسیٰؑ سے آپ ﷺ تک' => 'حضرت عیسیٰؑ سے آپ ﷺ تک','آپ ﷺ کے زمانے سے قیامت تک' => 'آپ ﷺ کے زمانے سے قیامت تک','قیامت کے بعد تک' => 'قیامت کے بعد تک'),old('zamana'), ['class'=>'form-control oselect', 'placeholder'=>'زمانہ درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('zamana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('mashq', old('mashq'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'مشق کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('mashq') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('batana', old('batana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'بتانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('batana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('sikhana', old('sikhana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'سکھانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('sikhana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('asif_id') ? 'has-error' : '' }}">
                            {!! Form::number('asif_id', old('asif_id'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'آص درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('asif_id') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-flex justify-content-between">
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('taluq') ? 'has-error' : '' }}">
                            {!! Form::select('taluq',array('ظاہری' => 'ظاہری','باطنی' => 'باطنی'),old('taluq'), ['class'=>'form-control oselect', 'placeholder'=>'تعلق درج کریں']) !!}
                            <span class="text-danger">{{ $errors->first('taluq') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('adat', old('adat'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'عادت کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('adat') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('samjhana', old('samjhana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'سمجھانے کی عمر']) !!}
                            <span class="text-danger">{{ $errors->first('samjhana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic emahol d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('abrar_id') ? 'has-error' : '' }}">
                            {!! Form::number('parhana', old('parhana'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'پڑھانے کی عمر']) !!}
                            {!! Form::text('status','Pending', ['class'=>'form-control d-none','min'=>'0']) !!}
                            <span class="text-danger">{{ $errors->first('parhana') }}</span>
                        </div>
                    </div>
                </div>
                <div class="stopic d-flex align-items-center">
                    <div class="tabs mr-1">
                        <div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            {!! Form::number('id', old('id'), ['class'=>'form-control','min'=>'0', 'placeholder'=>'آئی ڈی درج کریں','required'=>'required','disabled']) !!}
                            <span class="text-danger text-wrap">{{ $errors->first('id') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div>
                    @if(auth()->check() && auth()->user()->isMember())
                        <input type="text" class="d-none" name="member_id" value="{{auth()->user()->userable->id}}">
                        <input type="text" class="d-none" name="member_name" value="{{auth()->user()->userable->name}}">
                    @endif
                    <button class="bbuttons my-1 ml-2 addition">اندراج کریں</button>
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
        <main>
            @yield('content')
        </main>
    </div>
    <script src="/js/treeview.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
     $(".nav-title").click(function(){
        $('.detail2').addClass('shrink').removeClass('detail2');
        $('.bclose').removeClass('sbclose');
        $('.btitle').addClass('shtitle');
    });
    </script>
</body>

</html>