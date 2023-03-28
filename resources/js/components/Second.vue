<template>
<div class="form">
    <div>
        <div class="info" style="direction: rtl; width:100%;">
            <h6 style="font-size:35px;">This is a Learning Website where age & skill based Learning Solution are provided to its Users
            </h6>
            <p style="font-size:25px;">ہماری کوشش یہ ہے کہ طالب علم حضرات اپنی موجودہ </p>
            <div class="d-flex justify-content-center">
                <p style="font-size:25px;">
                    <ul class="text-right">
                        <li>عمر</li>
                        <li>علمی استعداد</li>
                        <li>قلبی استعداد</li>
                        <li>سمجھنے  کی استعداد</li>
                        <li>سیکھنے  کی استعداد</li>
                        <li> طلب کے مطابق</li>
                    </ul>
                </p>
            </div>
               
               <p style="font-size:25px;"> کسی معتمد استاد کی نگرانی میں تعلیم و تربیت کے دورے سے اس طرح گزریں <br>
                کہ <br>
                اگلی بات جاننے سے قبل ضروری ہے <br> کہ <br> پچھلی بات صحیح طور پر سمجھی گئی ہو <br>
                اور <br>
                جو علم حاصل کیا گیا ہے اس پر عمل ہو <br>
                یا <br>
                کم از کم عمل کرنے میں سستی پر ندامت کے ساتھ کوشش <br>
                اور <br>
                اللہ تعالی سے مدد مانگے کا سلسلہ قائم ہوا ہو۔ <br><br>
                اگر آپ یہ  چاہتے ہیں کہ اللہ تعالیٰ کے  اس ارشاد <br><br>  <span  style="font-family: 'Amiri Quran';font-size:25px;border:unset;color:black">يَا أَيُّهَا الَّذِينَ آمَنُوا ادْخُلُوا فِی السِّلْمِ كَافَّةً(البقرۃ:۲۰۸ ) </span> <br><br> کے مطابق پورے اسلام  میں داخل ہوں <br> تو مزید آگے بڑھیے۔ 
                </p>
            <!-- Button trigger modal -->

            <router-link to="/new">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    New Visitor
                </button>
            </router-link>
            <router-link to="/enrolled">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Enrolled Visitor
                </button>
            </router-link>
        </div>
    </div>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
