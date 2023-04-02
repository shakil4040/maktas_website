<template>
<div class="form">
    <div>
        <div class="info">

            <p>جو دینی نصاب آپ شائع کر رہے ہیں، کیا آپ اس کا اور ہماری فہرستوں کا موازنہ کروانا چاہیں گے؟ </p>
            <!-- Button trigger modal -->

            <router-link to="jihaan4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    جی نہیں
                </button>
            </router-link>

            <router-link to="#">
                <button type="button" @click="show3" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    جی ہاں
                </button>
            </router-link>

            <br>
            
            <a href="mailto:webmaster@example.com">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    موازنے کے لیے کتاب کی سافٹ کاپی بھیجیں۔
                </button>
            </a>
            <a href="javascript:;" @click="chart3">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    موازنے کا نمونہ دیکھیں۔
                </button>
            </a>
            <a href="javascript:;" @click="chart1">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    دینی عنوانات کی فہرستیں دیکھیں۔
                </button>
            </a>
            <div v-if="chart2" class="mt-2">
                <p style="margin-bottom:-44px;">براہِ مہربانی انتظار فرمائیں۔۔۔</p>
                <iframe src="/gauge-yourself" height="650" width="100%" title="Iframe Example"></iframe>
            </div>
            <div v-if="chart4" class="mt-2">
                <p style="margin-bottom:-44px;">براہِ مہربانی انتظار فرمائیں۔۔۔</p>
                <iframe src="/comparison" height="650" width="100%" title="Iframe Example"></iframe>
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
            hidden3: false,
            chart2: false,
            chart4: false
        }
    },
    methods: {
        show3() {
            return this.hidden3 = true;
        },
        chart1() {
            return this.chart2 = true;
        },
        chart3() {
            return this.chart4 = true;
        }
    }
}
</script>
