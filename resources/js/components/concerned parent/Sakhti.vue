<template>
<div class="form">
    <div>
        <div class="info">
            <div class="wrapper ">
                <div class="alert">
                    <div class="blue text-center" @click="show">
                        میڈیا کی تعریف
                        <div class="arrow2">&#10094;</div>
                    </div>
                </div>

                <div class="alert text-center" v-if="hidden" style="direction: rtl;"> <br><br>

                    میڈیا سے مراد وہ ذرائع ابلاغ ہیں جو <br><br>

                    ۱۔عمومی طور پر پہنچ میں ہو <br>
                    ۲۔ان سے جو پیغامات نشر ہوں، ان کا مخاطب کوئی خاص فرد یا طبقہ نہ ہو، <br>
                    ۳۔ ان نشریات پر کوئی خاص پابندی نہ ہو اور نشر کرنے والا اپنی نشریات میں آزاد ہوں، <br>
                    ۴۔ ان نشریات کو نشر کرنے والے افراد کے نظریات کے بارے میں کوئی درست علم موجود نہ ہو، <br>
                    ۵۔ ان نشریات میں سچ اور جھوٹ کی کوئی واضح تفریق نہ ہوسکے، <br>
                    ۶۔ ان نشریات کے ذریعے اصل مقصدناشر کا اپنا نفع ہو، چاہے مالی اعتبار سے یا شہرت کے اعتبار سے، <br>
                    ۷۔ان نشریات سے مقصود بالعموم خواہشاتِ نفسانی کی تکمیل ہو۔ <br><br>

                    ان علامات کے حامل اخبارات رسالے، پیمفلٹ، اشتہار، ریڈیو، ٹی وی، کمپیوٹر، انٹرنیٹ، موبائل پیغامات سب میڈیا میں شامل ہیں۔ <br><br>

                    <div class="alert" style="text-align:center;">
                        <div class="red">
                            اگلے مضمون پر جانے کے لئے مشق حل کرنا ضروری ہے۔ <br>
                        </div>
                        <router-link to="majbori">
                            <button class="btn btn-primary">آخر ایسی بھی کیا مجبوری ہے کہ مشق حل کئے بغیر آگے نہیں بڑھا جا سکتا ؟</button>
                        </router-link>

                        <button style="border:solid orange;" class="btn btn-primary">کیا آپ مشق حل کرنا چاہیں گے؟</button>

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
