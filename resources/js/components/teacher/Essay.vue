<template>
   <div class="form">
      <div>
        <div class="info">
          <p class="second">Write essays / lesson for the website
          </p>
          <!-- Button trigger modal -->
         
          <router-link to="/stats">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Know my stats and suggest me a task
            </button>
           </router-link>
           <router-link to="/pending">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               I shall select from the list of pending tasks
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
