<template>
   <div class="form">
      <div>
        <div class="info">
          <p>Your preferred language
          </p>
          <!-- Button trigger modal -->
          <router-link to="/urduenglish">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Urdu
            </button>
           </router-link>
            <button style="border:solid orange;"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               English
            </button>
           
            <button style="border:solid orange;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               العربیۃ
            </button>
          
           <router-link to="/urdu">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               اردو
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
        }
    }
</script>
