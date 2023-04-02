<template>
<div class="form">
    <div>
        <div class="info">

            <button type="button" class="btn btn-primary" @click="chart1(),show()" data-toggle="modal" data-target="#exampleModal">
                ازراہِ کرم ! مجھے پڑھائے جانے والے مضامین کی فہرست دکھائیں۔
            </button>

            <br>
            <div v-if="chart2" class="mt-2">
                <p style="margin-bottom:-44px;">براہِ مہربانی انتظار فرمائیں۔۔۔</p>
                <iframe src="/gauge-yourself" height="650" width="100%" title="Iframe Example"></iframe>
            </div>

            <button v-if="hidden" type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                میں معاونت کرنے کی نیت سےمزید آگے بڑھنا چاہتا ہوں۔
            </button> <br>
            <div class="info" v-if="hidden2">
                <p>
                    ہم آپ کے مشکور ہیں کہ آپ نے ہماری معاونت کا ارادہ کیا ازراہِ کرم رہنمائی فرمائیں کہ
                </p>
            </div>
            <button v-if="hidden2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="show3">
                آپ اللہ واسطے مدد فرمائیں گے
            </button> <br>
            <div class="info" v-if="hidden3" style="text-align:center;">
                <p>
                    آپ کو کام سونپنے سے قبل ضروری ہے کہ آپ ویب سائٹ کے مزاج کو اچھی طرح سمجھ لیں اور پھر کام کرنے کا ضابطہ پوری طرح سے سمجھ لیں اور پھر ہماری معاونت کریں

                </p>
                <button style="border:solid orange;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    میں آج کل مصروف ہوں اور یہ تفصیلی کام ہے۔
                </button> <br>
                <router-link to="sakhti2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        مجھے ویب سائٹ کا مزاج سمجھنے کے لیے کیا کرنا ہوگا۔
                    </button> <br>
                </router-link>
                <router-link to="tareeka">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        پہلے مجھے کام کرنے کے طریقہ کار سے مطلع فرمائیے۔
                    </button>
                </router-link> <br>
            </div>
            <div class="alert" style="text-align:center;">
                <button v-if="hidden2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="show4">
                    آپ کی خدمات کے نتیجے میں ہم جو بھی ہدیہ دیں گے آپ قبول فرمائیں گے
                </button> <br>
            </div>
            <div class="alert" v-if="hidden4" style="text-align:center;">
                <div class="red">
                    آپ کو کام سونپنے سے قبل ضروری ہے کہ آپ ویب سائٹ کے مزاج کو اچھی طرح سمجھ لیں اور پھر کام کرنے کا ضابطہ پوری طرح سے سمجھ لیں اور پھر ہماری معاونت کریں

                </div>
                <button style="border:solid orange;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    میں آج کل مصروف ہوں اور یہ تفصیلی کام ہے۔
                </button> <br>
                <router-link to="sakhti2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        مجھے ویب سائٹ کا مزاج سمجھنے کے لیے کیا کرنا ہوگا۔
                    </button> <br>
                </router-link>
                <router-link to="tareeka">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        پہلے مجھے کام کرنے کے طریقہ کار سے مطلع فرمائیے۔
                    </button>
                </router-link> <br>
            </div>
            <div class="alert" style="text-align:center;">
                <button v-if="hidden2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" @click="show5">
                    پہلے آپس کا معاملہ طے کرنا چاہیں گے
                </button> <br>
            </div>
            <div class="alert" v-if="hidden5" style="text-align:center;">
                <div class="red">
                    آپ کو کام سونپنے سے قبل ضروری ہے کہ آپ ویب سائٹ کے مزاج کو اچھی طرح سمجھ لیں اور پھر کام کرنے کا ضابطہ پوری طرح سے سمجھ لیں اور پھر ہماری معاونت کریں

                </div>
                <button style="border:solid orange;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    میں آج کل مصروف ہوں اور یہ تفصیلی کام ہے۔
                </button> <br>
                <router-link to="sakhti2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        مجھے ویب سائٹ کا مزاج سمجھنے کے لیے کیا کرنا ہوگا۔
                    </button> <br>
                </router-link>
                <router-link to="tareeka">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        پہلے مجھے کام کرنے کے طریقہ کار سے مطلع فرمائیے۔
                    </button>
                </router-link> <br>
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
            chart2: false

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
        chart1() {
           return this.chart2 = true;
        }

    }
}
</script>
