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
                    <button type="button" class="btn btn-primary small" @click="show2" >Submit</button>
                    <div class="form-group input ">
                        <input type="number" min="0" class="form-control "  placeholder="اپی عمر کا اندراج کریں">
                    </div>
                   
    
                </form>
            </div>
               <button v-if="hidden2" type="button" class="btn btn-primary" @click="show3" data-toggle="modal" data-target="#exampleModal">
                والدہ
            </button> <button v-if="hidden2" type="button" class="btn btn-primary" @click="show3" data-toggle="modal" data-target="#exampleModal">
                والد
            </button>
         

            <br>

            <router-link to="/amli">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    عملی باتوں کا معائنہ 
                </button>
            </router-link>
            <router-link to="/elmi">
                <button v-if="hidden3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    علمی  باتوں  کا  معائنہ
                </button>
            </router-link>

            <br>

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
            hidden3: false
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
        }
    }
}
</script>
