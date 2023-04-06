<template>
<div class="form">
    <div>
        <div class="info">

            <div class="wrapper">

                <div class="alert" @click="show">

                    <div class="blue text-center">رواجی میڈیا سے کیسے مختلف ہے؟ Learning Website
                         <div class="arrow2">&#10094;</div>
                    </div>
                   
                </div>

                <div class="alert text-center" v-if="hidden" style="direction:rtl;">
                    قرآن مجید کی آیت <br> <span style="font-family: 'Amiri Quran';font-size:25px;border:unset;color:blue">يَاأَيُّهَا الَّذِينَ آمَنُوا إِنْ جَاءَكُمْ فَاسِقٌ بِنَبَإٍ فَتَبَيَّنُوا(الحجرات:۶ ) <br></span> میں حکم ہےکہ تحقیق و تصدیق کے بغیربات آگے نقل نہ کی جائے <br>
                    اور دوسرا حضرت علی کا قول ہےکہ <br> <span style="font-family: 'Amiri Quran';font-size:25px;border:unset;color:blue">قَالَ عَلِيٌّ حَدِّثُوا النَّاسَ بِمَا يَعْرِفُونَ أَتُحِبُّونَ أَنْ يُكَذَّبَ اللَّهُ وَرَسُولُهُ <br>
 <span style="font-size:15px;border:unset;color:blue;">(صحيح البخاري، باب مَنْ خَصَّ بِالْعِلْمِ قَوْمًا دُونَ قَوْمٍ كَرَاهِيَةَ أَنْ لَا يَفْهَمُوا، 1/37، رقم الحديث: 127)</span> <br>
 
</span> 
حضرت علی کرم اللہ وجہہ فرماتے ہیں کہ لوگوں کو ایسی بات بتاؤ جس کو وہ سمجھ سکیں۔ کیا تم یہ پسند کرتے ہو کہ) سادہ لوگ  اپنی  <br> کم علمی کی وجہ سے ) اللہ اور اس کے رسول ﷺ کی تکذیب کر بیٹھیں۔  <br>
 لوگوں سے ان کی عقول کے موافق بات کرو ۔ <br>

                    Learning website ان دو اصولوں کا خاص لحاظ رکھتے ہوئے خالصتاً اللہ تعالیٰ کی رضا کے لیے دینِ اسلام کی تعلیمات کے <br> ذریعے انسانیت کی خدمت کرنا چاہتی ہے اور اپنی اس کاوش کا کسی مخلوق سے کوئی بدلہ نہیں لینا چاہتی۔ <br>
 
                    Learning Website میں کوشش یہ کی گئی ہے کہ قاری کی <br>
                    موجودہ عمر، <br>
                    قلبی استعداد، <br>
                    علمی استعداد، <br>
                    سمجھنے کی استعداد <br>
                    اور طلب کے مطابق <br>
                    اس کو آگے بڑھنے کا راستہ دکھایا جائے۔ <br><br>

                </div>

                <div v-if="hidden" class="alert" @click="show2">
                    <div class="blue text-center">
                        سند کیوں ضروری ہے؟
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div class="alert text-center" v-if="hidden2">
                    سند دراصل اس بات کا ثبوت ہے کہ سند یافتہ شخص نے کسی ماہر استاد سے باقاعدہ اس علم کو سیکھا ہے۔ <br>
                    جیسے اگر کوئی صاحب، ڈاکٹر کی سند حاصل کیے بغیر کلینک کھول لیں <br>
                    اور <br>
                    بغیر کسی استاد سے سیکھے لوگوں کے آپریشن کرنا شروع کر دیں تو یقیناً انسانیت کو بہت نقصان پہنچے گا۔ <br>
<br>
                    انسانوں کو انسانوں سے نقصان نہ پہنچے، اس کے لیے ضروری ہے کہ شاگرد، اساتذہ سے باضابطہ تعلیم و تربیت حاصل کریں اور جب <br> استاد کا اطمینان ہو کہ شاگرد کسی خاص شعبے میں انسانیت کو نفع پہنچانا سیکھ گیا ہے تو استاد فقط اس خاص شعبے میں بحیثیت اس شعبے کے ماہر <br> ہونے کے شاگرد کو سند دے تاکہ انسان سے انسانیت کو نقصان نہ پہنچے۔

                </div>
                <div v-if="hidden2" class="alert " @click="show3">
                    <div class="blue text-center">
                        سند کون دے سکتا ہے ؟
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div class="alert text-center" v-if="hidden3">

                    جی آپ بالکل درست سوچ رہے ہیں کہ فقط سند یافتہ افراد ہی سند دے سکتے ہیں۔

                </div>
                <div v-if="hidden3" class="alert" @click="show4">
                    <div class="blue text-center">
                        انسانیت کو حقیقی اور دائمی نقصان سے بچانے کے حوالے سے سند یافتہ افراد کون ہیں؟
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div class="alert text-center" v-if="hidden4">

                    انبیاءؑ اور رسلؑ اس شعبے کے ماہر اور سند یافتہ ہیں۔

                </div>
                <div v-if="hidden4" class="alert" @click="show5">
                    <div class="blue text-center">
                        انبیاء اور رسل کو سند کون دیتا ہے ؟
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div class="alert text-center" v-if="hidden5">
                    چونکہ اللہ تعالیٰ ہی حقیقی تربیت فرمانے والے ہیں، اس لیے بندوں میں سے جس شخص کی تعلیم وتربیت اللہ تعالیٰ براہِ راست، بغیر کسی <br> واسطے کے فرمائیں وہی سب سے زیادہ تربیت یافتہ اور مستند شمار ہو گا <br>
                    تو <br>
                    جی ہاں <br>
                    انبیاءؑ اور رسلؑ کو سند، اللہ جلَّ جلالہ ٗعطا فرماتے ہیں۔ <br>

                </div>
                <div v-if="hidden5" class="alert" @click="show6">
                    <div class="blue text-center">
                        میں اللہ تعالیٰ اور سند یافتہ افراد کے بارے میں جاننے کا خواہشمند ہوں۔
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div v-if="hidden6" class="alert text-center" @click="show7">
                    <div class="blue" style="color:black">
                        To proceed further we humbly request you to please <span style="color:blue;border:unset;font-size:25px;"><a href="#student" class="student1">enroll yourself</a></span> <br> with us.
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div v-if="hidden7" class="alert" @click="show8">
                    <div class="blue">
                        اب آپ صرف اوپر دکھائے گئے تمام مضامین کی مشقیں حل کرنے کو کوشش کریں تو ا ٓپ خود بخود انرول ہو جائیں گے۔
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>
                <div v-if="hidden8" class="alert" >
                    <div class="red">
                        Exercise Page With MCQs & True False Questions Will Open.
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
        }
    },
    methods: {
        show() {
            return this.hidden = !this.hidden;
        },
        show2() {
            return this.hidden2 = !this.hidden2;
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

    }
}
</script>
