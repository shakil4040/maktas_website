<template>
<div>
    <div class="login-registration">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <!-- <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">New Visitor</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Enrolled Visitor</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="login-form">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form @submit.prevent="submit">

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Nick Name" v-model="fields.name">
                                     <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Submit your age" v-model="fields.age">
                                     <div v-if="errors && errors.age" class="text-danger">{{ errors.age[0] }}</div>
                                </div>

                                <div class="form-group ">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio"  class="form-check-input"  value="Male" name="gender"  v-model="fields.gender">Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input"  value="Female" name="gender" v-model="fields.gender" >Female
                                        </label>
                                    </div>
                                    <div v-if="errors && errors.gender" class="text-danger">{{ errors.gender[0] }}</div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Submit</button>

                            </form>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div> -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="login-form">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form @submit.prevent="submit2">
                                <div class="form-group">
                                    <!-- <div class="fb-goo">
                      <button type="button" class="btn btn-primary btn-lg btn-block google"><i class="fa fa-google"></i>&nbsp;&nbsp;Login with Google</button>
                    </div> -->
                                    <input type="email"  class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" v-model="fields2.email">
                                     <div v-if="errors && errors2.email" class="text-danger">{{ errors2.email[0] }}</div>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" v-model="fields2.password">
                                     <div v-if="errors && errors2.password" class="text-danger">{{ errors2.password[0] }}</div>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    <a href="#" class="float-right">Forget Password ?</a>
                                </div>
                                
                                    
                                        <button type="submit" class="btn btn-primary btn-lg btn-block facebook"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</button>
                                    
                                
                            </form>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="form">
        <div class="container">
          <div class="info">
            <p>Enrolled Visitor<br>
              Sorry but we do not seem to have you as an enrolled Visitor. Please Click
               <router-link to="/new">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 New Visitor
              </button>
            </router-link> 
               to get enrolled

            </p>

          </div>
        </div>
      </div> -->
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        return {
            fields: {},
            errors: {},
            fields2: {},
            errors2: {},
        
            
            
        }
    },
    methods: {
        
        submit() {
            this.errors = {};
            axios.post('/api/newvisitor', this.fields).then(response => {
                if(this.fields.age<=4){
                    location.href = "/below4"
                }
                else{
                    location.href = "/language"
                }
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        },
        submit2() {
            this.errors2 = {};
            axios.post('/login', this.fields2).then(response => { 
                        if(response.data.user == 'Unauthorized Access'){ 
                            location.href = "/invalid"
                            }
                        else{
                            location.href = "/home"
                        }
                        
                        
                    
                    }).catch(error => {
                if (error.response.status === 422) {
                    this.errors2 = error.response.data.errors || {};
                }
            });
        },
    },
  
}
</script>
