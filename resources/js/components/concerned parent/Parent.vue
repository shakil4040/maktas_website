<template>
   <div class="form">
      <div>
        <div class="info">
          <p>Concerned Parent
          </p>
          <!-- Button trigger modal -->
         
          <router-link to="/score">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Score Yourself
            </button>
           </router-link>
           <router-link to="/gauge">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Gauge your child's performance
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
