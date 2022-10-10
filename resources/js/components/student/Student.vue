<template>
   <div class="form">
      <div>
        <div class="info">
          
          
            <button type="button" class="btn btn-primary" @click="show" data-toggle="modal" data-target="#exampleModal">
               Your Age?
            </button>
           
         <br>
            
            <div v-if="hidden">
               <button  type="button" class="btn btn-primary" @click="show2" data-toggle="modal" data-target="#exampleModal">
                  0-10
               </button>
               <button style="border:solid orange;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  11-20
               </button>
               <button style="border:solid orange;"  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  21-30
               </button>
               <button style="border:solid orange;"  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  31-40
               </button>
               <button style="border:solid orange;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  41-50
               </button>
               <button style="border:solid orange;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  51-60
               </button>
               <button style="border:solid orange;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  61-70
               </button>
               <button style="border:solid orange;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                  71-80
               </button>
            </div>
           
           
       <br>
            
            <router-link to="/below4">
               <button v-if="hidden2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  1,2,3,4
               </button>
            </router-link >
            <router-link to="/language">
               <button v-if="hidden2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  5,6,7,8,9,10
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
               this.hidden2 =true;
               this.hidden = false;
               return
            },
            
        }
    }
</script>
