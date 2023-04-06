<template>
    <div class="form">
        <div>
            <div class="info">
                <p>اللہ تعالی آپ سے راضی ہوں <br></p>
                <div class="wrapper">
                    <div class="alert">
                        <div class="blue text-center" @click="show">
                            انرول ہوئے بغیر آپ درج ذیل مضامین پڑھ سکتے ہیں۔
                            <div class="arrow2">&#10094;</div>
                        </div>
                    </div>
                    <div class="alert" v-if="hidden">
                        <div class="blue text-center" @click="show2">
                            دوائیوں کی طرح ہوتے ہیں Learning Material
                            <div class="arrow2">&#10094;</div>
                        </div>
                    </div>
                    <div class="alert text-center" v-if="hidden2">
                        ہم انسانوں کی مثال اس ہانڈی کی طرح ہے جو چولہے پر رکھی ہے اور نیچے وقت کی آگ جل رہی ہے۔ <br>
                        وقت کے ساتھ ساتھ ہم اپنے ارد گرد سےجو کچھ حاصل کرتے ہیں وہ ہماری ذات پر اپنا اثر چھوڑتی ہیں۔ <br>
                        جیسے اگر ہم اپنی ہانڈی میں نمک ڈالیں گے تو نمک کا ذائقہ آئے گا، مرچیں ڈالیں تو مرچ کا، <br> <br>
                        اور <br><br>
                        کمال یہ ہے کہ سب کچھ ایسا گھل مل جاتا ہے کہ اس کا الگ کرنا ممکن نہیں رہتا <br>
                        ایسے میں اگر <br>
                        کچھ غلط ڈل جائے تو اس کے اثر کو زائل کرنے کے لیے بڑی محنت کرنی پڑتی ہے۔ <br><br>
    
                        کتابیں یا جو بھی سیکھنے والا مواد ہمارے ارد گرد موجود ہے اس سب کی مثال کسی میڈیکل سٹور میں رکھی ہوئی دوائیوں کی مانند ہے <br><br>
                        کہ <br><br>
                        تمام دوائیاں ہیں تو انسان کو نفع پہنچانے کے لیے مگر کس مریض کو کون سی دوائی کھانی چاہیے، اس کا فیصلہ اگر ڈاکٹر صاحب کریں تو نفع <br> کی غالب امید ہے اور اگر کوئی آدمی اپنی مرضی سے کھاتا چلا جائے تو صحت مندی کی بجائے الٹا اپنی جان کو نقصان پہنچائے گا۔ <br> <br>
    
                        بالکل اس ہی طرح کون سے شاگرد کو کون سا مواد پڑھنا یا دیکھنا اور سننا چاہیے اور کس قسم کے مواد سے پرہیز کرنا چاہیے اس کا فیصلہ اگر <br> ایک قابل استاد کرے تو امید ہے کہ تھوڑے وقت میں شاگرد کوزیادہ نفع ہو گا اور اس کی زندگی کی ہانڈی خوشبودار اور ذائقےدار ہو گی۔ <br>
                        واللہ اعلم <br>
    
                        <div class="alert" style="text-align:center;">
                            <div class="red">
                                اگلے مضمون پر جانے کے لئے مشق حل کرنا ضروری ہے۔ <br>
                            </div>
                            <button style="border:solid orange;" class="btn btn-primary">کیا آپ مشق حل کرنا چاہیں گے؟</button>
                            <router-link to="sakhti">
                                <button class="btn btn-primary">آخر اتنی سختی کیوں کہ مشق حل کئے بغیر آگے نہیں بڑھا جا سکتا ؟</button>
                            </router-link>
    
    
                        </div>
                    </div>
    
                </div>
    
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="show">
                        انرول ہونے سے قبل چند بنیادی مضامین کا پڑھنا ضروری ہے
                    </button>
                    <br>
    
                    <button v-if="hidden" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="show2">
                        دوائیوں کی طرح ہوتے ہیں Learning Material
                    </button>
    
                    <br> -->
    
                <!-- <button class="btn btn-primary">اگلے مضمون پر جانے کے لئے مشق حل کرنا ضروری ہے</button>
                <br>
                <router-link to="sakhti">
                    <button class="btn btn-primary">آخر اتنی سختی کیوں کہ مشق حل کئے بغیر آگے نہیں بڑھا جا سکتا ؟</button>
                </router-link>
                <router-link to="jihaan3">
                    <button class="btn btn-primary">کیا آپ مشق حل کرنا چاہیں گے</button>
                </router-link> -->
            </div>
    
        </div>
    </div>
    <!-- </div> -->
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
    