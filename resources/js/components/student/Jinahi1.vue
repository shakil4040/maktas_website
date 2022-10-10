<template>
   <div class="form">
      <div>
        <div class="info">
          
          <p>Kya ap urdu  اردو parhana seekhna chahin gay?
            </p>
          <!-- Button trigger modal -->
          <router-link to="/jihaan">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Ji Haan
            </button>
           </router-link>
           
            <router-link to="jinahi2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 Ji Nahi
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
