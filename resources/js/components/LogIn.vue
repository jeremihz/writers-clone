<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sign In</div>

                    <div class="card-body">
                        <form @submit.prevent="login" @keydown="form.onKeydown($event)">

                            <div class="form-group">
                            <label>Email</label>
                            <input v-model="form.email" type="email" name="email"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                            <label>Password</label>
                            <input v-model="form.password" type="password" name="password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                            </div>

                            <button type="button" class="btn btn-primary" @click="signIn()">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
               form: new Form({
                  email: '',
                  password: '',
               })
            }
        },
        methods:{
           signIn(){
            if (!this.form.email) {
                    // set(type, 'required');
                    this.form.errors.set({
                      email: 'This field is required'
                    })
                    return false;
                }else if (!this.form.password) {
                    this.form.errors.set({
                      password: 'This field is required'
                    })
                    return false;
                }else{
                     this.form.post('api/signin')
                            .then(() => {
                                // this.$router.push('/home');
                            })
                            .catch(error => {
                               this.errors = error.response.data.errors;
                               // set (email, error.response.data.msg);
                               this.form.errors.set({
                                  email: error.response.data.msg
                                })
                                return false;
                            })
                        }
           }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>