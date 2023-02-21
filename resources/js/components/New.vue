<template>
   <div class="form">
      <div>
        <div class="info">
          <p>
            Are you a <br>
            <router-link to="/student">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Student
            </button>
           
          </router-link>
            <router-link to="/parent">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Concerned Parent
            </button>
           
          </router-link>
            <router-link to="/teacher">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Teacher
            </button>
           
          </router-link>
            <router-link to="/principal">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Principal
            </button>
           
          </router-link>
            <router-link to="/principal">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Educationist
            </button>
           
          </router-link>
            <router-link to="/jihaan3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               None of these
            </button>
           
          </router-link><br>
           
          </p>
          
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
