<template>
   <div class="form">
      <div>
        <div class="info">
          
           
          <p class="second">ہم معذرت خواں ہیں ۔ مزاج سمجھے بغیر کام کرنے کے طریقہ کار پر قاری حضرات کو اشکالات ہونے کے سبب موجودہ ترتیب یہ ہے کہ پہلے اس محنت کا مزاج سمجھ لیا جائے اور پھر معاونت کی جائے
          </p>
         
          
           <router-link to="/sakhti">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               آخر اتنی سختی کیوں؟
            </button>
          </router-link>
           <router-link to="/jihaan3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               جی مناسب ہے
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
