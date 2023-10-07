<template>
<div>
    <div class="slider">
        <ul class="bxslider">
          <li>
                <div class="container">
                    <div class="info">
                        <h2>This Is Not<br><span>A Thoroughfare</span></h2>
                        <router-link to="/second">
                            For more details click here
                        </router-link>
                    </div>
                </div>
                <!-- / content -->
            </li>
            <li>
              <div class="container mx-5">
                  <div class="info">
                      <h2><br><span style="font-family: 'jameel noori nastaleeq';">یہ شاہراہِ عام نہیں</span></h2>
                      <router-link to="/second" style="font-family: 'jameel noori nastaleeq';">
                        مزید جانیے
                      </router-link>
                  </div>
              </div>
                <div class="container">
                    <div class="info">
                        <h2>This Is Not<br><span>A Thoroughfare</span></h2>
                        <router-link to="/second">
                            For more details click here
                        </router-link>
                    </div>
                </div>
                <!-- / content -->
            </li>
            
        </ul>
        <div class="bg-bottom"></div>
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
