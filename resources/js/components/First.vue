<template>
   <div class="form">
      <div >
        <div class="info">
          <span>This is Not a Thorough Fare</span>
          <p>یہ شارع عام نہیں ہے</p>
          <!-- Button trigger modal -->
          <router-link to="/second">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               مزید جانیے
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
