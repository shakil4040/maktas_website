<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | درج ذیل زبان کی سطریں ولڈیٹر کلاس کے ذریعہ استعمال ہونے والے
    | ڈیفالٹ خطا پیغامات پر مشتمل ہیں۔ ان میں سے کچھ اصولوں کے ایک
    | سے زیادہ ورژن ہیں جیسے کہ سائز کے اصول۔ آپ یہاں پر ہر ایک
    | پیغام کو اپنی ضروریات کے مطابق ترمیم کر سکتے ہیں۔
    |
    */

    'accepted' => ':attribute کو قبول کرنا ضروری ہے۔',
    'active_url' => ':attribute ایک درست URL نہیں ہے۔',
    'after' => ':attribute کی تاریخ :date کے بعد کی ہونی چاہیے۔',
    'after_or_equal' => ':attribute کی تاریخ :date کے برابر یا بعد کی ہونی چاہیے۔',
    'alpha' => ':attribute میں صرف حروف ہو سکتے ہیں۔',
    'alpha_dash' => ':attribute میں صرف حروف، نمبرز، ڈیشز اور انڈر اسکورز ہو سکتے ہیں۔',
    'alpha_num' => ':attribute میں صرف حروف اور نمبرز ہو سکتے ہیں۔',
    'array' => ':attribute ایک صف ہونی چاہیے۔',
    'before' => ':attribute کی تاریخ :date سے پہلے کی ہونی چاہیے۔',
    'before_or_equal' => ':attribute کی تاریخ :date کے برابر یا پہلے کی ہونی چاہیے۔',
    'between' => [
        'numeric' => ':attribute کا سائز :min اور :max کے درمیان ہونا چاہیے۔',
        'file' => ':attribute کا سائز :min اور :max کلو بائٹس کے درمیان ہونا چاہیے۔',
        'string' => ':attribute کے حروف :min اور :max کے درمیان ہونے چاہئیں۔',
        'array' => ':attribute میں :min اور :max آئٹمز کے درمیان ہونا چاہیے۔',
    ],
    'boolean' => ':attribute فیلڈ صحیح یا غلط ہونا چاہیے۔',
    'confirmed' => ':attribute کی تصدیق مطابقت نہیں رکھتی۔',
    'date' => ':attribute ایک درست تاریخ نہیں ہے۔',
    'date_equals' => ':attribute کی تاریخ :date کے برابر ہونی چاہیے۔',
    'date_format' => ':attribute کا فارمیٹ :format کے مطابق نہیں ہے۔',
    'different' => ':attribute اور :other مختلف ہونے چاہئیں۔',
    'digits' => ':attribute کے ہندسے :digits ہونے چاہئیں۔',
    'digits_between' => ':attribute کے ہندسے :min اور :max کے درمیان ہونے چاہئیں۔',
    'dimensions' => ':attribute کے تصاویر کے ابعاد غلط ہیں۔',
    'distinct' => ':attribute فیلڈ کی ایک نقل قدر ہے۔',
    'email' => ':attribute ایک درست ای میل ایڈریس ہونا چاہیے۔',
    'ends_with' => ':attribute کو ان میں سے کسی ایک کے ساتھ ختم ہونا چاہیے: :values۔',
    'exists' => 'منتخب کردہ :attribute غلط ہے۔',
    'file' => ':attribute ایک فائل ہونی چاہیے۔',
    'filled' => ':attribute فیلڈ میں قدر ہونی چاہیے۔',
    'gt' => [
        'numeric' => ':attribute کا سائز :value سے بڑا ہونا چاہیے۔',
        'file' => ':attribute کا سائز :value کلو بائٹس سے زیادہ ہونا چاہیے۔',
        'string' => ':attribute کے حروف :value سے زیادہ ہونے چاہئیں۔',
        'array' => ':attribute میں :value آئٹمز سے زیادہ ہونے چاہئیں۔',
    ],
    'gte' => [
        'numeric' => ':attribute کا سائز :value سے بڑا یا برابر ہونا چاہیے۔',
        'file' => ':attribute کا سائز :value کلو بائٹس سے بڑا یا برابر ہونا چاہیے۔',
        'string' => ':attribute کے حروف :value سے زیادہ یا برابر ہونے چاہئیں۔',
        'array' => ':attribute میں :value آئٹمز یا زیادہ ہونے چاہئیں۔',
    ],
    'image' => ':attribute ایک تصویر ہونی چاہیے۔',
    'in' => 'منتخب کردہ :attribute غلط ہے۔',
    'in_array' => ':attribute فیلڈ :other میں موجود نہیں ہے۔',
    'integer' => ':attribute ایک عدد ہونا چاہیے۔',
    'ip' => ':attribute ایک درست IP ایڈریس ہونا چاہیے۔',
    'ipv4' => ':attribute ایک درست IPv4 ایڈریس ہونا چاہیے۔',
    'ipv6' => ':attribute ایک درست IPv6 ایڈریس ہونا چاہیے۔',
    'json' => ':attribute ایک درست JSON سٹرنگ ہونا چاہیے۔',
    'lt' => [
        'numeric' => ':attribute کا سائز :value سے کم ہونا چاہیے۔',
        'file' => ':attribute کا سائز :value کلو بائٹس سے کم ہونا چاہیے۔',
        'string' => ':attribute کے حروف :value سے کم ہونے چاہئیں۔',
        'array' => ':attribute میں :value آئٹمز سے کم ہونے چاہئیں۔',
    ],
    'lte' => [
        'numeric' => ':attribute کا سائز :value سے کم یا برابر ہونا چاہیے۔',
        'file' => ':attribute کا سائز :value کلو بائٹس سے کم یا برابر ہونا چاہیے۔',
        'string' => ':attribute کے حروف :value سے کم یا برابر ہونے چاہئیں۔',
        'array' => ':attribute میں :value آئٹمز سے زیادہ نہیں ہونے چاہئیں۔',
    ],
    'max' => [
        'numeric' => ':attribute کا سائز :max سے بڑا نہیں ہو سکتا۔',
        'file' => ':attribute کا سائز :max کلو بائٹس سے زیادہ نہیں ہو سکتا۔',
        'string' => ':attribute کے حروف :max سے زیادہ نہیں ہو سکتے۔',
        'array' => ':attribute میں :max آئٹمز سے زیادہ نہیں ہو سکتیں۔',
    ],
    'mimes' => ':attribute کو ایک قسم کا فائل ہونا چاہیے: :values۔',
    'mimetypes' => ':attribute کو ایک قسم کا فائل ہونا چاہیے: :values۔',
    'min' => [
        'numeric' => ':attribute کا سائز کم سے کم :min ہونا چاہیے۔',
        'file' => ':attribute کا سائز کم سے کم :min کلو بائٹس ہونا چاہیے۔',
        'string' => ':attribute کے حروف کم سے کم :min ہونے چاہئیں۔',
        'array' => ':attribute میں کم سے کم :min آئٹمز ہونی چاہئیں۔',
    ],
    'not_in' => 'منتخب کردہ :attribute غلط ہے۔',
    'not_regex' => ':attribute کا فارمیٹ غلط ہے۔',
    'numeric' => ':attribute ایک عدد ہونا چاہیے۔',
    'password' => 'پاس ورڈ غلط ہے۔',
    'present' => ':attribute فیلڈ موجود ہونا چاہیے۔',
    'regex' => ':attribute کا فارمیٹ غلط ہے۔',
    'required' => ':attribute فیلڈ ضروری ہے۔',
    'required_if' => ':attribute فیلڈ ضروری ہے جب :other :value ہو۔',
    'required_unless' => ':attribute فیلڈ ضروری ہے جب :other :values میں نہ ہو۔',
    'required_with' => ':attribute فیلڈ ضروری ہے جب :values موجود ہو۔',
    'required_with_all' => ':attribute فیلڈ ضروری ہے جب :values موجود ہوں۔',
    'required_without' => ':attribute فیلڈ ضروری ہے جب :values موجود نہ ہو۔',
    'required_without_all' => ':attribute فیلڈ ضروری ہے جب :values میں سے کوئی بھی موجود نہ ہو۔',
    'same' => ':attribute اور :other کا ملاپ ہونا ضروری ہے۔',
    'size' => [
        'numeric' => ':attribute کا سائز :size ہونا چاہیے۔',
        'file' => ':attribute کا سائز :size کلو بائٹس ہونا چاہیے۔',
        'string' => ':attribute کے حروف :size ہونے چاہئیں۔',
        'array' => ':attribute میں :size آئٹمز ہونی چاہئیں۔',
    ],
    'starts_with' => ':attribute کو ان میں سے کسی ایک کے ساتھ شروع ہونا چاہیے: :values۔',
    'string' => ':attribute ایک سٹرنگ ہونا چاہیے۔',
    'timezone' => ':attribute ایک درست زون ہونا چاہیے۔',
    'unique' => ':attribute پہلے ہی استعمال ہو چکا ہے۔',
    'uploaded' => ':attribute اپلوڈ کرنے میں ناکام ہو گیا۔',
    'url' => ':attribute کا فارمیٹ غلط ہے۔',
    'uuid' => ':attribute ایک درست UUID ہونا چاہیے۔',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | یہاں آپ اپنی مرضی کے مطابق توثیق پیغامات فراہم کر سکتے ہیں جو
    | مخصوص اصولوں کے لیے استعمال ہوتے ہیں۔
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | درج ذیل زبان کی سطریں ہمارے خصوصیت پلیس ہولڈر کو کچھ زیادہ
    | قابل فہم بنانے کے لیے استعمال کی جاتی ہیں جیسے کہ "E-Mail Address"
    | کے بجائے "ای میل ایڈریس"۔ یہ صرف اس میں مدد کرتا ہے کہ
    | ہمارا پیغام زیادہ اظہار خیال ہوتا ہے۔
    |
    */

    'attributes' => [],

];
