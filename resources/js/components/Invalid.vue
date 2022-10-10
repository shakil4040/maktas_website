<template>
 <div class="form">
        <div class="container">
          <div class="info">
            <div class="red">
              Sorry but we do not seem to have you as an enrolled Visitor. Please Click
               <router-link to="/new">
              <div class="blue">
                 New Visitor
              </div>
            </router-link> 
               to get enrolled

            </div>

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