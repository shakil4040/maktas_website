<template>
<div class="form">
    <div>
        <div class="info">
       
            <div v-if="hidden3" class="d-flex justify-content-center" style="font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;">
                <div class="bigcircle" style="background-color:#203ab8;">معاملات</div>
                <div class="smallcircle first" >بیع وشراء</div>
                <div class="smallcircle second" >اجارہ</div>
                <div class="smallcircle third">شرکت</div>
                <div class="smallcircle forth">مضاربت</div>
                <div class="smallcircle fifth">ہدیہ</div>

            </div>

            <div class="row justify-content-center">
                <transition name="fade">
                    <div v-if="hidden" class="d-flex justify-content-center col-3" style="font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;width:50%">
                        <div class="bigcircle" style="background-color:#f4ec0ee8;">عقائد</div>
                        <div class="smallcircle first" :title="Allah">اللہ تعالیٰ </div>
                        <div class="smallcircle second" :title="farishtay">فرشتے </div>
                        <div class="smallcircle third" :title="kitabay">کتابیں </div>
                        <div class="smallcircle forth" :title="rasool">رسول </div>
                        <div class="smallcircle fifth" :title="taqdeer">تقدیر </div>
                        <div class="smallcircle sixth" :title="akhrat">آخرت </div>
                    </div>
                </transition>
            <div class="d-flex justify-content-center col-3" style="border-radius:50%;font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;border: 1px solid;background-color: #efebb7;/* width: 191px; */border-radius: 55%;padding-bottom: 106px;padding-top: 52px;">
                <div class="bigcircle">اسلام</div>
                <div class="smallcircle first" @click="show">عقائد</div>
                <div class="smallcircle second" @click="show2">عبادات</div>
                <div class="smallcircle third" @click="show3">معاملات</div>
                <div class="smallcircle forth" @click="show4">معاشرت</div>
                <div class="smallcircle fifth" @click="show5">اخلاق</div>

            </div>
                <div v-if="hidden2" class="d-flex justify-content-center col-3" style="font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;width:50%">
                    <div class="bigcircle" style="background-color:#ff00e0">عبادات</div>
                    <div class="smallcircle first">نماز </div>
                    <div class="smallcircle second">روزہ </div>
                    <div class="smallcircle third">حج </div>
                    <div class="smallcircle forth">زکوٰۃ </div>
                    <div class="smallcircle fifth">جہاد </div>
                </div>
            </div>
            <div class="row" style="margin-top: -77px;">
                <div v-if="hidden4" class="d-flex justify-content-center col-6" style="font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;width:50%">
                    <div class="bigcircle" style="background-color:red;">معاشرت</div>
                    <div class="smallcircle first">پیدائش</div>
                    <div class="smallcircle second">نکاح </div>
                    <div class="smallcircle third">طلاق </div>
                    <div class="smallcircle forth">حقوق </div>
                    <div class="smallcircle fifth">دعائیں </div>
                </div>
                <div v-if="hidden5" class="d-flex justify-content-center col-6" style="font-family: 'Jameel Noori Nastaleeq';margin-bottom: 68px;width:50%">
                    <div class="bigcircle" style="background-color:#35c9e1">اخلاق</div>
                    <div class="smallcircle first">تقوی </div>
                    <div class="smallcircle second">اخلاص </div>
                    <div class="smallcircle third">عاجزی </div>
                    <div class="smallcircle forth">غصہ </div>
                    <div class="smallcircle fifth">حسد </div>
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
            Allah:'اللہ تعالیٰ پر ایمان',
            farishtay:'فرشتوں پر ایمان',
            rasool:'رسولوں پر ایمان',
            akhrat:'آخرت پر ایمان',
            taqdeer:'تقدیر پر ایمان',
            kitabay:'کتابوں پر ایمان',
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
    }
}
</script>
<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .01s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
