<template>
<div class="form">
    <div>
        <div class="info">

            <p style="font-family: 'Droid Arabic Kufi';">لَآ <router-link to="/kalma">
                <span class="blue" style="font-size:69px;font-family: 'Droid Arabic Kufi';">اِلٰہَ</span>
            </router-link> اِلَّا <span class="blue" style="font-size:69px;font-family: 'Droid Arabic Kufi';" @click="show10">اللہُ</span> <span class="blue" style="font-size:69px;font-family: 'Droid Arabic Kufi';" @click="show11">مُحَمَّدٌ</span> <router-link to="/rasool">
                <span class="blue" style="font-size:69px;font-family: 'Droid Arabic Kufi';">رَّسُولُ</span>
            </router-link> اللہِ</p>
            <p style="font-size:30px;">اللہ تعالیٰ کے سوا کوئی معبود نہیں، محمد(صلی اللہ علیہ وسلم) اللہ کے رسول ہیں۔</p>
            <p style="font-size:30px;color:blue;">اس کلمے کو پڑھ کر انسان <a href="https://islam.pasarigrp.com/">اسلام</a> میں داخل ہو جاتا ہے۔</p>
            <a href="https://islam.pasarigrp.com/" style="font-size:30px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
            <!-- Button trigger modal -->
            <div class="wrapper" v-if="hidden">

                <div class="alert" v-if="hidden">

                    مضمون= اِلٰہ

                </div>

                <div v-if="hidden" class="alert" @click="show2">
                    <div class="blue">
                        الہ کی تعریف کہاں سے اخذ کی گئی ہے۔
                        <div class="arrow" :class="rotate">&#10094;</div>
                    </div>
                </div>
                <div class="alert" v-if="hidden2">

                    ہم نے الہ کی تفصیل <span class="blue" style="font-size:25px;" @click="show3">محمد </span> <span class="blue" style="font-size:25px;" @click="show3">رسول</span> اللہ صلی اللہ علیہ وسلم کی تعلیمات سے لی ہے۔
                    <div class="arrow2">&#10094;</div>
                </div>

                <div class="alert" v-if="hidden3" style="text-align:center">

                    <div class="red">اگلا ہائپر لنک کلک کرنے پر مضمون الہ کی مشق کھل جائے گی اور مشق کے اوپر مندرجہ ذیل بات لکھی ہو</div> <br>
                    We are sorry but to proceed to next lesson you are requested to please exhibit that you have completely understood the lesson illah by solving the below MCQs and some questions with True / False options. <br>
                    <span span class="blue" style="font-size:16px;" @click="show4">Proceed to Exercise</span>

                </div>
                <div v-if="hidden4" class="alert" style="text-align:center;">
                    <div class="red">
                        اگر سوال زیادہ ہوں گے تو ایک وقت میں تمام سوال نہیں کھیلیں گے ۔ مگر ٹکڑوں میں کھولیں گے۔ <br>
                        مشق میں سوالوں کے ٹکڑے = سوالوں کے آپس کے ربط کے موافق کئے گئے ہوں گے
                        صحیح غلط اور ایم۔سی۔کیو کی آپشن کے ساتھ مندرجہ ذیل آخری آپشن ہر سوال کے ساتھ ہو گی۔ <br>
                    </div> <br>
                    تکا مارنے سے بہتر ہے کہ میں اپنی لا علمی کا اظہار کر دوں۔ <br>
                    <div class="red">
                        سوالوں کا صحیح جواب دینے پر کمپیوٹر کہے کہ
                    </div> <br>
                    جیسا آپ صلی اللہ علیہ وسلم نے فرمایا، ان کی نقل میں، میں بھی کہتا ہوں
                    کہ
                    آپ کو علم مبارک ہو <br>
                    <div class="red">
                        اور محمد صلی اللہ علیہ وسلم والی یا رسول والی ( جو بھی انہوں نے کلک کیا تھا ) ونڈو کھل جائے۔

                        اگلا مضمون بیک گراؤنڈ میں ایسے کھلے جیسے بٹر پیپر اوپر رکھا ہوا ہے کہ پڑھا نہ جا سکتا ہو اور لکھا ہو

                    </div> <br>
                    ایک آخری سوال
                    آپ نے پچھلی مشق جو حل کی تو اس میں کتنے سوالوں کے جواب دینے کے لئے آپ نے تکا مارا اور کتنے سوالوں کے جواب کا آپ کو پکا یقین تھا۔ <br>
                    <div class="alert">
                        <div class="blue" @click="show5">
                            تمام سوالات پر تکا مارا
                            <div class="arrow2">&#10094;</div>
                        </div>
                    </div>
                    <div class="alert" v-if="hidden5">
                        <div class="red">
                            پہلے جواب میں کمپیوٹر پوچھے گا کہ
                        </div> <br>
                        <div class="green" v-if="hidden5" @click="show8">
                            کیا آپ کسی استاد کی مدد حاصل کرنا چاہیں گے ؟
                        </div>
                        <div class="alert" v-if="hidden8" style="direction:rtl;">
                            <div class="red">
                                اگر استاد سے مدد چاہ رہے ہوں تو بچے کا نام، عمر، شہر، ماضی میں حاصل کی گئی تعلیم، تعلیمی ادارے کا نام بھرنے کا فارم دیا جائے۔
                                فارم پر کرنے پر استاد محترم کے ساتھ آن لائن ونڈو کھل جائے گی

                            </div> <br>
                            <img src="/assets/images/message.jpg" alt=""> <br>
                            <div class="red">
                                اور بچے کی طرف سے مندرجہ ذیل آٹو میٹک پیغام جائے گا۔
                            </div> <br>
                            السلام علیکم و رحمتہ اللہ و برکاتہ
                            محترم استاد جی،
                            میرا نام یہ ہے اور میری عمر یہ ہے اور میں تعلق فلانے شہر سے ہے میں نے فلانے ادارے سے اس درجے تک تعلیم حاصل کی ہوئی ہے۔

                            میں نے لرننگ ویب سائٹ پر مضمون الہ خود پڑھا ہے مگر پوری طرح سے سمجھ میں نہ آنے کے سبب مشق حل کرتے ہوئے چند سوال تکے کے فارمولے پر حل کئے ہیں۔
                            جن سوالات پر میں نے تکا مارا تھا وہ نیچے درج ہیں۔ <br>
                            1۔ <br>
                            5۔ <br>
                            8۔ <br>
                            ازراہے کرم میری مدد اور رہنمائی فرمائے۔ <br>

                        </div>
                        <div class="green" v-if="hidden5" @click="show9">
                            مضمون دوبارہ دھیان سے پڑھ کر مشق دوبارہ حل کرنا چاہیں گے ؟
                        </div>
                        <div class="alert" v-if="hidden9" style="direction:rtl;">
                            <div class="red">
                                اگر بچہ دوبارہ مضمون پڑھنا چاہے تو پڑھنے دیا جائے البتہ مشق اس دفعہ دوسری ہو گی پہلے والی نہیں ہو گی تاکہ دوبارہ سے صحیح امتحان ہو پائے۔
                                اور اگر بچہ
                                دوبارہ مشق حل کرنا چاہے تو بھی نئی مشق آئے گی
                                ۔۔۔
                                نئی مشق صحیح حل کرنے کے بعد بچے سے پوچھا جائے گا کہ

                            </div> <br>
                            کیا اب آپ وہ سوال دوبارہ حل کرنا چاہیں گے جو پہلی مشق میں صحیح حل نہیں کر سکے تھے۔ <br>
                            <div class="red">
                                اگر ہاں تو وہ سوال آ جائیں گے ۔ اگر نہ تو نیا مضمون۔

                                بچے ویب سائٹ پر جو بھی کارکردگی دکھا رہےہوں اس سب کا کمپیوٹر بیک گراؤنڈ میں سٹیٹسٹکل ڈیٹا بناتا جائے۔۔۔ <br>
                                جیسے کہ بچے نے آج تک 10 مضمون پڑھے ہیں۔ <br>
                                جن میں 6 مضمون دو مرتبہ پڑھے ہیں، <br>
                                6مرتبہ استاد کی مدد لینے سے انکار کیا ہے، <br>
                                100 میں سے 25 سوالات پہلی بار غلط حل کئے تھے۔ <br>
                                100 سوالوں میں سے 15 پر تکے مارے اور <br>
                                10 کے بارے میں لاعلمی کا اظہار کیا۔

                            </div> <br>
                            جو مضمون آج تک پڑھے ہیں وہ نیچے درخت میں دکھائے جائیں گے

                            مزید یہ کہ ان دس مضامین میں سے بچے نے تین بنیادی عنوانات پڑھے ہیں اور 7 فروعی باتوں سے متعلق عنوانات پڑھے ہیں۔ <br>
                            <div class="red">
                                کل کو اگر بچہ اپنی پرفارمنس رپورٹ مانگے تو سٹیٹسٹکل ڈیٹا میں سیلیکٹڈ انفارمیشن دے کر پوچھا جائے کہ

                            </div> <br>
                            کیا آپ اپنی بہتری میں پرفارمنس کے لئے استاد محترم یا کسی بڑے سے مشورہ لینا چاہیں گے ؟

                        </div>
                    </div>
                    <div class="alert">
                        <div class="blue" @click="show6">
                            مشق دوبارہ دکھائیں تاکہ جن پر تکا مارا ہے اس کی نشاندہی کر دوں
                            <div class="arrow2">&#10094;</div>
                        </div>
                    </div>
                    <div v-if="hidden6" class="alert">
                        <div class="red">
                            دوسرے جواب میں مشق بولٹس کی آپشن کے ساتھ کھل جائے گی۔
                        </div>
                    </div>
                    <div class="alert">
                        <div class="blue" @click="show7">
                            الحمداللہ کہیں تکا مارنے کی نوبت نہیں آئیں
                            <div class="arrow2">&#10094;</div>
                        </div>
                    </div>

                </div>

                <div v-if="hidden7" class="alert">
                    <div class="red">
                        تیسرے سوال کے جواب میں اگلا مضمون کھل جائے گا۔
                    </div>
                </div>

            </div>
            <div class="wrapper" v-if="hidden10">
                <div v-if="hidden10" class="alert">
                    <div class="red">
                        اگر
                        اللہ تعالی کے نام اقدس پر کلک کیا جائے تو اسماء الحسنی اللہ تعالی کے ذاتی نام کے ارد گرد گول دائرے میں اس ترتیب سے لکھے ہوں کہ
                        پہلے صفات ذاتیہ کے اسماء ہوں
                        اور
                        دوسرے دائرے میں صفات فعلیہ کے اسماء ہوں۔ <br>
                        ہر مضمون پر ایک وقت میں مندرجہ ذیل میں سے کوئی ایک آپشن ہوں گی۔ <br>
                        <div class="blue">
                            مضمون اعراب کے ساتھ پڑھنا چاہیں تو یہاں کلک کریں۔ <br>
                            مضمون بغیر اعراب کے ساتھ پڑھنا چاہیں تو یہاں کلک کریں۔

                        </div>
                        <div class="red">
                            مشکل الفاظ پر جب کرسر آئے گا تو ان کا اردو ترجمہ - انگریزی ترجمہ لکھا نظر آئے گا
                            نیچے مثال دیکھئے <br>
                            <img src="/assets/images/cursor.jpg" alt="" style="width:100%;"> <br>
                            مندرجہ ذیل شکل میں پائی چارٹ بنایاجائے گا ان تمام بنیادی باتوں کا جن کو ہم دین کی جڑ کہ سکتے ہیں اور <br>
                            <img src="/assets/images/pie chart.jpg" alt=""> <br>
                            ان باتوں میں سے کسی بھی بات پر کلک کرنے سے اگلے درجے کی بنیادی باتوں کی تفصیلات کا درخت بچے کی عمر اور صلاحیت کےموافق تفصیل کے ساتھ کھل جائے گا <br>
                            <img src="/assets/images/chart2.jpg" alt="" width="100%"> <br>
                            پائی چارٹ اور لیسن ٹری میں سے بچہ جو مضمون پڑھ کر مشق حل کر لے گا تو اس کا رنگ فرق ہو جائے گا ۔۔ تاکہ بچے اور استاد کو حصول کا شعور ہو اور مزید کیا کیا ہونے والا ہے وہ ایک تصویر میں نظر آ سکے۔ <br>

                        </div>

                    </div>
                </div>
            </div>
            <div class="wrapper" v-if="hidden11">
                <div v-if="hidden11" class="alert">
                    <div class="red">
                        اگر
                        محمد صلی اللہ علیہ وسلم کے نام اقدس پر کلک کیا جائے تو حضرت محمد صلی اللہ علیہ وسلم کے صفاتی نام حضرت کے ذاتی نام کے ارد گرد گول دائرے میں اس ترتیب سے لکھے ہوں کہ
                        پہلے دائرے میں آپ صلی اللہ علیہ وسلم کی وہ باتیں جو بالخصوص آپ صلی اللہ علیہ وسلم کی ذات سے تعلق رکھتی ہیں
                        اور پھر اگلے دائرے میں وہ باتیں جو انبیاء و رسل کے لئے بالخصوص ہیں
                        اور
                        تیسرے دائرے میں وہ باتیں جن میں کوئی عام آدمی بھی کسی درجے میں مشترک ہو سکتا ہے۔ <br>
                        ہر مضمون پر ایک وقت میں مندرجہ ذیل میں سے کوئی ایک آپشن ہوں گی۔ <br>
                        <div class="blue">
                            مضمون اعراب کے ساتھ پڑھنا چاہیں تو یہاں کلک کریں۔ <br>
                            مضمون بغیر اعراب کے ساتھ پڑھنا چاہیں تو یہاں کلک کریں۔

                        </div>
                        <div class="red">
                            مشکل الفاظ پر جب کرسر آئے گا تو ان کا اردو ترجمہ - انگریزی ترجمہ لکھا نظر آئے گا
                            نیچے مثال دیکھئے <br>
                            <img src="/assets/images/cursor.jpg" alt="" style="width:100%;"> <br>
                            مندرجہ ذیل شکل میں پائی چارٹ بنایاجائے گا ان تمام بنیادی باتوں کا جن کو ہم دین کی جڑ کہ سکتے ہیں اور <br>
                            <img src="/assets/images/pie chart.jpg" alt=""> <br>
                            ان باتوں میں سے کسی بھی بات پر کلک کرنے سے اگلے درجے کی بنیادی باتوں کی تفصیلات کا درخت بچے کی عمر اور صلاحیت کےموافق تفصیل کے ساتھ کھل جائے گا <br>
                            <img src="/assets/images/chart2.jpg" alt="" width="100%"> <br>
                            پائی چارٹ اور لیسن ٹری میں سے بچہ جو مضمون پڑھ کر مشق حل کر لے گا تو اس کا رنگ فرق ہو جائے گا ۔۔ تاکہ بچے اور استاد کو حصول کا شعور ہو اور مزید کیا کیا ہونے والا ہے وہ ایک تصویر میں نظر آ سکے۔ <br>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data: function () {
        return {
            hidden: false,
            hidden2: false,
            hidden3: false,
            hidden4: false,
            hidden5: false,
            hidden6: false,
            hidden7: false,
            hidden8: false,
            hidden9: false,
            hidden10: false,
            hidden11: false,
            state: false,
        }
    },
    methods: {
        show() {
            return this.hidden = !this.hidden;
        },
        show2() {
            this.hidden2 = !this.hidden2;
            this.state = !this.state;
            return
        },
        show3() {
            return this.hidden3 = !this.hidden3;
        },
        show4() {
            return this.hidden4 = !this.hidden4;
        },
        show5() {
            return this.hidden5 = !this.hidden5;
        },
        show6() {
            return this.hidden6 = !this.hidden6;
        },
        show7() {
            return this.hidden7 = !this.hidden7;
        },
        show8() {
            return this.hidden8 = !this.hidden8;
        },
        show9() {
            return this.hidden9 = !this.hidden9;
        },
        show10() {
             this.hidden10 = !this.hidden10;
            if(this.hidden11)
            {
             this.hidden11 = !this.hidden11;
            }
        },
        show11() {
             this.hidden11 = !this.hidden11;
              if(this.hidden10)
            {
             this.hidden10 = !this.hidden10;
            }
        },

    },
    computed: {
        rotate() {
            return {
                'arrow2': this.state
            }
        }
    }
}
</script>

<style>
.arrow2 {
    transform: rotate(-90deg);
}
</style>
