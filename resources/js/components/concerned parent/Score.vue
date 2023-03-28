<template>
<div class="form">
    <div>
        <div class="info">
            <p>

                <button type="button" class="btn btn-primary" @click="show" data-toggle="modal" data-target="#exampleModal">
                    آپ کی عمر
                </button>

                <br></p>
            <div class="d-flex justify-content-center ">
                <form v-if="hidden" class="age d-flex  align-items-center" v-on:submit.prevent="show2">
                    <button type="button" class="btn btn-primary small" @click="show2">Submit</button>
                    <div class="form-group input ">
                        <input type="number" required min="0" class="form-control " placeholder="اپی عمر کا اندراج کریں">
                    </div>

                </form>
            </div>
            <button v-if="hidden2" type="button" class="btn btn-primary" @click="show3" data-toggle="modal" data-target="#exampleModal">
                والدہ
            </button> <button v-if="hidden2" type="button" class="btn btn-primary" @click="show3" data-toggle="modal" data-target="#exampleModal">
                والد
            </button>

            <br>

            <a href="javascript:;" @click="chart1">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    دینی باتوں کی اجمالی فہرست
                </button>
            </a>
            <a href="javascript:;" @click="chart1">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    دینی باتوں کی تفصیلی فہرست
                </button>
            </a>
            <div v-if="chart2" class="mt-2">
                <p style="margin-bottom:-44px;">براہِ مہربانی انتظار فرمائیں۔۔۔</p>
                <iframe src="/tree" height="650" width="100%" title="Iframe Example"></iframe>
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
            chart2: false
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
        chart1() {
            return this.chart2 = true;
        }
    }
}
</script>
