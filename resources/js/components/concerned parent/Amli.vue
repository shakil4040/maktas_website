<template>
   <div class="form">
      
        <div class="info">
          
          <p class="second red">کم از کم جو عملی صفات جو  ایک مسلمان میں اپنی آخرت سنوارنے کے لیے ہونی چا ہیں ہیں  ان کا احتسابی چارٹ درخت کی شکل میں کھل جائے گا </p>
            <div class="alert" style="text-align:center">
                    <div class="red">
                        کسی بھی مضمون کو کلک کرنے پر اس کا خلاصہ لکھا ہو گا
                        اور
                        پورا مضمون پڑھئے کا کلک ہو گا۔
                        پورا مضمون پڑھنے کو کلک کرنے پر مندرجہ ذیل جملہ لکھا آئے گا۔ <br>
                    </div>
                    ہم معذرت خواہ ہیں کہ پورا مضمون صرف انرولڈ وزٹر پڑھ سکتے ہیں کیا آپ انرول ہونا چاہیں گے ؟
                </div>
                <router-link to="below4">
                    <button class="btn btn-primary">جی نہیں</button>
                </router-link>
                <router-link to="jihaan3">
                    <button class="btn btn-primary">جی ہاں</button>
                </router-link>
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
