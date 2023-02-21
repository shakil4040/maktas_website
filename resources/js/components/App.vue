<template>
<div>

    <div class="main">
        <nav class="navbar sticky-top " style="background-color: black;
        
         margin: -10px -57px;
        padding: 15px 23px;">
            <!-- <a @click="$router.go(-1)">
                <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                    Back
                </button>
            </a> -->
            <div class="float-left d-flex">
                <router-link to="/second" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Home
                    </button>
                </router-link>
                <router-link to="/student" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Student
                    </button>
                </router-link>
                <router-link to="/parent" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Concenrned Parent
                    </button>
                </router-link>
                <router-link to="teacher" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Teacher
                    </button>
                </router-link>
                <router-link to="principal" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Principal
                    </button>
                </router-link>
                <router-link to="principal" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        Educationist
                    </button>
                </router-link>
                <router-link to="jihaan3" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                        None of these
                    </button>
                </router-link>
                <div class="d-flex" style="margin-left:16px;">
                    <router-link to="age15" style="text-decoration:none;">
                        <button type="button" class="btn btn-primary nav" title="Sample Windown of an Enrolled Student Age 15 & Above">
                            15 & Above
                        </button>
                    </router-link>
                    <router-link to="tree2" style="text-decoration:none;">
                        <button type="button" class="btn btn-primary nav" title="Just a Sample for an idea">
                            Tree of Islam
                        </button>
                    </router-link>
                </div>
                
            </div>
            <!-- <div class="float-right">
                <input style="width: 150px;" type="text" placeholder="Make a Suggestion:">
                <input type="text" style="width: 83px;margin-left: 6px;" placeholder="Search:">
            </div> -->
            <!-- <a @click="$router.go(+1)">
                <button type="button" class="btn btn-primary nav" data-toggle="modal" data-target="#exampleModal">
                    Next
                </button>
            </a> -->
        </nav>
    
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style>
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: black;
  font-size: 16px;
  opacity: 1; /* Firefox */
}
</style>
