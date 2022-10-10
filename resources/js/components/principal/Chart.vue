<template>
<div class="form">
    <div>
        <div class="info">

            <div class="wrapper">

                <div class="alert">

                    <div class="red"> مندرجہ ذیل شکل میں پائی چارٹ بنایاجائے گا ان تمام بنیادی باتوں کا جن کو ہم دین کی جڑ کہ سکتے ہیں اور <br>
                        <img src="/assets/images/pie chart.jpg" alt=""> <br>
                        ان باتوں میں سے کسی بھی بات پر کلک کرنے سے اگلے درجے کی بنیادی باتوں کی تفصیلات کادرخت کھل جائے گا <br>
                        <img src="/assets/images/chart2.jpg" alt="" width="100%"> <br><br>
                        
                        یہ والدین کو دکھانے کے لیے ہے۔ سکولوں کے پرنسپلز حضرات کو دکھانے کے لئے ہے تاکہ ایک اندازہ ہو کہ ہم بچوں کو دین کی کتنی تصویر پڑھا رہے ہیں
                        یا سمجھا رہے ہیں
                        یا دکھا رہے ہیں
                        یا ہمیں خود کو کتنی باتیں معلوم ہے اور
                        اس حوالہ سے کہ اللہ کے ہاں کون کون سی چیزیں ہیں جو کہ ایک اچھا مسلمان بننے کے لیے ضروری ہیں،
                        ابھی مزید کتنا اور کام ہونا ضروری ہے۔
                        یہ چارٹ بچے کو دکھانے کے لیے نہیں ہے ۔ بچےپر بوجھ پڑ سکتا ہے کہ اتنا زیادہ کرنا ہے مگر بڑوں کو اس کا اندازہ ہو گا تو ذہن سازی ہو جائی گی ان شاء اللہ اور پھر کل کو بچہ خود بھی دیکھ لیا تو کوئی مسئلہ نہیں۔
                        واللہ اعلم <br> <br>
                        

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

        }
    },
    methods: {
        show() {
            return this.hidden = true;
        },

    }

}
</script>
