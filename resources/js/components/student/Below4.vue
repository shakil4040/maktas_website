<template>
   <div class="form">
      <div >
        <div class="info">
          <div class="red" style="font-size:60px">Audio visual - Learning material inflow would start</div>
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
