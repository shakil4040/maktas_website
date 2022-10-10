<template>
<div class="form">

    <div class="info">

        <div class="red" style="font-size:34px">کم سے کم وہ بنیادی باتیں جو آپ کے بچے کو ۔۔۔۔۔۔ سال کی عمر تک معلوم ہونی چاہئیں ہیں اس کا احتسابی چارٹ درخت کی شکل میں کھل جائے گا </div>
        
        <div class="wrapper">
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

        <!-- <div v-if="hidden" class="d-flex justify-content-center">
            <div class="accordion">
                <div class="text">
                    مضمون ۴
                </div>
                <button class="btn btn-primary small" @click="show2">مزید پڑھیے</button>
            </div>
            <div class="accordion">
                <div class="text">
                    مضمون ۳
                </div>
                <button class="btn btn-primary small" @click="show2">مزید پڑھیے</button>
            </div>
            <div class="accordion">
                <div class="text">
                    مضمون ۲
                </div>
                <button class="btn btn-primary small" @click="show2">مزید پڑھیے</button>
            </div>
            <div class="accordion">
                <div class="text">
                    مضمون ۱
                </div>
                <button class="btn btn-primary small" @click="show2">مزید پڑھیے</button>
            </div>
        </div>
        <div v-if="hidden2" class="alert">
            ہم معذرت خواہ ہیں کہ پورا مضمون صرف انرولڈ وزٹر پڑھ سکتے ہیں کیا آپ انرول ہونا چاہیں گے ؟ <br> -->
            <!-- <router-link to="jinahi3">
                <button class="btn btn-primary">جی نہیں</button>
            </router-link>
            <router-link to="jihaan3">
                <button class="btn btn-primary">جی ہاں</button>
            </router-link> -->
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
            return this.hidden = true;
        },
        show2() {
            return this.hidden2 = true;
        }
    }
}
</script>
