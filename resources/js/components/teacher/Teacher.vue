<template>
   <div class="form">
      <div>
        <div class="info">
          
          <!-- Button trigger modal -->
         
          <router-link to="/online">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Teach Student online
            </button>
           </router-link>
           <router-link to="/online">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Write essays / lesson for the website
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
