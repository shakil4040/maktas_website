<template>
<div>
    <div class="student d-block mx-auto my-4" style="width:68%;" id="fancy">
        <h2>Enrolled Visitor</h2>
        <form @submit.prevent="submit">
            <div class="left">
                <fieldset class="mail">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address..." v-model="fields2.email">
                    <div v-if="errors && errors2.email" class="text-danger">{{ errors2.email[0] }}</div>
                </fieldset>
            </div>
            <div class="right">
                <fieldset class="name">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password..." v-model="fields2.password">
                    <div v-if="errors && errors2.password" class="text-danger">{{ errors2.password[0] }}</div>
                </fieldset>
            </div>
            <div class="btn-holder">
                <button class="btn blue" type="submit">Submit</button>
            </div>
        </form>
    </div>
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
                if (this.fields.age <= 4) {
                    location.href = "/below4"
                } else {
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
                if (response.data.user == 'Unauthorized Access') {
                    location.href = "/invalid"
                } else {
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
