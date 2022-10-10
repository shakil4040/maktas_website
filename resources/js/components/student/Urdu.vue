<template>
   <div class="form">
      <div >
        <div class="info">
          
          <p>کیا آپ ہماری مدد کریں گے کہ ہم آپ کی اردو پڑھنے اورسمجھنے کی استعداد کو پرکھ سکیں؟
          </p>
          <!-- Button trigger modal -->
           
            
          
           
            <router-link to="below4">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 جی نہیں
              </button>
            </router-link>
          
          <router-link to="/urduexam">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               جی ہاں
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
