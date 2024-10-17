<?php

// Initialize the static pagination strings and numbers from 1 to 20
$pagination = [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | درج ذیل زبان کی سطریں صفحہ بندی کے روابط بنانے کے لیے پیجینیٹر لائبریری
    | کے ذریعہ استعمال کی جاتی ہیں۔ آپ انہیں اپنی درخواست کے مطابق
    | بہتر بنانے کے لیے آزاد ہیں۔
    |
    */

    'previous' => '&laquo; پچھلا',
    'next' => 'اگلا &raquo;',
    'showing' => 'نتائج :total میں سے :start سے :end دکھا رہے ہیں',

    // Static numerals from 1 to 20
    'numbers' => [
        1 => '۱',
        2 => '۲',
        3 => '۳',
        4 => '۴',
        5 => '۵',
        6 => '۶',
        7 => '۷',
        8 => '۸',
        9 => '۹',
        10 => '۱۰',
        11 => '۱۱',
        12 => '۱۲',
        13 => '۱۳',
        14 => '۱۴',
        15 => '۱۵',
        16 => '۱۶',
        17 => '۱۷',
        18 => '۱۸',
        19 => '۱۹',
        20 => '۲۰',
    ],
];

// Persian/Urdu digits mapping
$persianNumerals = [
    1 => '۱',
    2 => '۲',
    3 => '۳',
    4 => '۴',
    5 => '۵',
    6 => '۶',
    7 => '۷',
    8 => '۸',
    9 => '۹',
    0 => '۰',
];

// Generate numbers from 21 to 1000
for ($i = 21; $i <= 1000; $i++) {
    $digits = str_split($i);
    $persianValue = '';
    foreach ($digits as $digit) {
        $persianValue .= $persianNumerals[$digit];
    }
    $pagination['numbers'][$i] = $persianValue;
}

// Finally, return the full array
return $pagination;

