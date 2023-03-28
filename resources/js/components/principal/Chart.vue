<template>
<div class="form">
    <div>
        <div class="info">

            <div class="wrapper">

                <div class="alert">

                    <div class="red"> 
                        <div class="mt-2">
                            <p style="margin-bottom:-44px;">براہِ مہربانی انتظار فرمائیں۔۔۔</p>
                            <iframe src="/tree" height="650" width="100%" title="Iframe Example"></iframe>
                        </div>
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
