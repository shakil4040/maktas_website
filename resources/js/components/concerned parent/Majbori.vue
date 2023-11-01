<template>
<div class="form">
    <div>
        <div class="info">
            <div class="wrapper">
                <div class="alert">
                    <div class="blue text-center" @click="show">
                        کون سی باتیں میڈیا نہیں ہیں ؟
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>

                <div class="alert text-center" v-if="hidden"><br><br>
                    ایسی باتیں جو کسی فن کی ماہرشخصیت کی طرف سے ،اس فن کےمستند حوالوں سے نشر کی گئی ہوں اور اس کا اصل مقصد دوسروں کی نفع <br> رسانی ہو،اس میڈیا میں شامل نہیں<br><br>
                    البتہ <br><br>
                    اگر استاد سے رہنمائی لیے بغیر شاگرد اپنی فہم و صلاحیت کے درجے سے اوپر کا مستند مواد پڑھنا شروع کر دے تو ذہنی انتشار پیدا ہونے کا <br> قوی اندیشہ موجود ہے۔ اس وجہ سے ہر مستند کتاب کا آزادانہ طور پر، ہر شخص کے لیےقابلِ حصول ہونا، کسی درجے میں میڈیا کی <br> تعریف میں داخل ہے۔ <br><br>

                    واللہ اعلم <br><br>

                    ایسی کتابیں جو بظاہر مستند مواد کی حامل ہوں مگر کسی مستند شخصیت سے منسوب نہ ہوں اور حوالہ جات کے بغیر ہوں نیز عمومی طور پر <br> تقسیم کردی گئی ہو ں یا عمومی طور پر پہنچ میں ہو وہ بھی میڈیا ہی میں شامل ہیں۔ <br><br>

                    <div class="alert" style="text-align:center;">

                        <button class="btn btn-primary" style="border:2px solid orange;">کیا آپ مشق حل کرنا چاہیں گے؟</button>
                        <router-link to="website">
                            <button class="btn btn-primary"  onclick="topFunction()"> ویب سائٹ میں انرول ہوتےوقت مشق حل کر یں گے ۔ ابھی میں ویب سائٹ کے بارے میں مزید جاننا چاہتا ہوں۔</button>
                        </router-link>

                    </div>
                </div>

            </div>

            <div v-if="hidden2" class="alert">

                <button style="border:solid orange;" class="btn btn-primary">کیا آپ مشق حل کرنا چاہیں گے؟</button>

                <router-link to="website">
                    <button class="btn btn-primary"> ویب سائٹ میں انرول ہوتےوقت مشق حل کر یں گے ۔ ابھی میں ویب سائٹ کے بارے میں مزید جاننا چاہتا ہوں۔</button>
                </router-link>
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
            hidden2: false
        }
    },
    methods: {
        show() {
            return this.hidden = !this.hidden;
        },
        show2() {
            return this.hidden2 = !this.hidden2;
        }
    }
}
</script>
