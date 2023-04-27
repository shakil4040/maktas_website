<template>
   <div class="form">
      <div >
        <div class="info">
          <div class="red">Audio visual - Learning material inflow would start</div>
          <div class="alert text-center" style="border-top: unset;">
            <img src="/assets/images/AVLA1.jpg" alt="">
            <img src="/assets/images/AVLA2.jpg" alt="">
            <img src="/assets/images/AVLA3.jpg" alt="">
            <img src="/assets/images/AVLA4.jpg" alt="">
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
        data: function(){
            return {
                hidden:false,
                hidden2:false
            }
        },
        methods: {
            show(){
               return this.hidden =true;
            },
            show2(){
               return this.hidden2 =true;
            }
        }
    }
</script>
