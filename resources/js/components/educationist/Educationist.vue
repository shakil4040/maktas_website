<template>
    <div class="form">
       <div>
         <div class="info">
           
           <!-- Button trigger modal -->
          
           <router-link to="/online">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Help us develope a universal curriculum
             </button>
            </router-link>
            <!-- <router-link to="/essay">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Help us develope a universal curriculum
             </button>
           </router-link> -->
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
 