<template>
<div class="form">
    <div>
        <div class="info">

            <button type="button" class="btn btn-primary" @click="show" data-toggle="modal" data-target="#exampleModal">
                بالعموم رائج تعلیمی نظم اور انسانی فلاح کے تقاضے
            </button>

            <br>
            <div class="alert text-center" v-if="hidden">
               <a href="/assets/images/educational_system1.pdf" alt="" style="width:100%;" download>
                    <button class="nizam"><i class="fa fa-download"></i> Download</button>
               </a>
               
            </div>

            <div v-if="hidden" class="alert" style="text-align:center;">
                آپ مہتمم ہیں <br>
                <button  type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                    سکول کے
                </button> 
                <button  type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                    مدرسے کے
                </button> 
                <button  type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                    کالج کے
                </button> 
                <button  type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                    یونیورسٹی کے
                </button> 
            </div>
            <div class="alert" v-if="hidden2" @click="show3" style="text-align:center;">
                
                    <div class="blue">
                        کیا آپ اپنے ادارے میں پڑھائے جانے والے دینی نصاب کا  موازنہ ان تمام باتوں سے کرنا چاہیں گے  جو کم از کم ایک مسلمان  کو اپنی آخرت کی کامیابی کے لئے معلوم  ہونی چاہیں ہیں۔
                    </div>
                
            </div>
           
           
            <router-link to="chart">
                <button style="margin-right:220px;" v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ضروری عملی باتوں کا مکمل چارٹ
                </button>
            </router-link> 
            <router-link to="chart">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
                    ضروری علمی باتوں کا مکمل چارٹ
                </button> 
            </router-link> <br>
            <router-link to="chart">
                <button style="margin-right:20px;" v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                ضروری عملی باتوں کا  طالب علم کی عمر کے حساب سے   چارٹ  
                </button>
            </router-link> 
            <router-link to="chart">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ضروری علمی باتوں کا  طالب علم کی عمر کے حساب سے   چارٹ  
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
    },
    data: function () {
        return {
            hidden: false,
            hidden2: false,
            hidden3: false,
            hidden4: false,

        }
    },
    methods: {
        show() {
            return this.hidden = true;
        },
        show2() {
            return this.hidden2 = true;
        },
        show3() {
            return this.hidden3 = true;
        },
        show4() {
            return this.hidden4 = true;
        },

    }
}
</script>
<style>
    .nizam {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}
</style>
