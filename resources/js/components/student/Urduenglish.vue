<template>
   <div class="form">
      <div>
        <div class="info">
          <p>Kia aap urdu jo kay <br>
             اردو <br>
            May likhi ho parh saktay hain
            </p>
          <!-- Button trigger modal -->
          <router-link to="/urduexam">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Ji Haan
            </button>
           </router-link>
           <router-link to="/jinahi1">
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
