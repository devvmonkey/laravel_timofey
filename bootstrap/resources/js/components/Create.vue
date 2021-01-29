<template>
    <div>
        <h2>Create user</h2>
        <div>
            <div class="form-group">
                <label for="first_name">First name:</label>
                <input v-validate="'required|alpha_spaces'" name="first_name" type="text" id="first_name" :class="['form-control', {'is-invalid': errors.has('first_name')}]" v-model="user.first_name">

                <div v-show="errors.has('first_name')" class="invalid-feedback">
                    {{ errors.first('first_name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="last_name">Last name:</label>
                <input v-validate="'required|alpha_spaces'" name="last_name" type="text" id="last_name" :class="['form-control', {'is-invalid': errors.has('last_name')}]" v-model="user.last_name">

                <div v-show="errors.has('last_name')" class="invalid-feedback">
                    {{ errors.first('last_name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input v-validate="'required|email'" name="email" type="email" id="email" :class="['form-control', {'is-invalid': errors.has('email')}]" v-model="user.email">

                <div v-show="errors.has('email')" class="invalid-feedback">
                    {{ errors.first('email') }}
                </div>
            </div>
            <button @click="validateBeforeSubmit" class="btn btn-success">Save user</button>
            <button @click="goToHome" class="btn btn-danger">Cancel</button>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                user: {
                    first_name: '',
                    last_name: '',
                    email: ''
                }
            }
        },

        notifications: {
            showSuccessMsg: {
              type: 'success',
              title: 'User created',
              message: 'The user has been created suscessfully'
            },
            showErrorMsg: {
                type: 'error',
                title: 'Something went wrong',
                message: 'Something happend creating the user, try again later'
            },
            showWarningMsg: {
                type: 'warn',
                title: 'Correct the errors',
                message: 'You have to fix the errors in order to create the user'
            }
        },

        methods: {
            goToHome(){
                this.$router.push({name: 'home'});
            },
            saveUser(){
                let loader = this.$loading.show();
                let newUser = this.user;
                axios.post('/api/users', newUser).then((response) =>{
                   loader.hide(); 
                   this.showSuccessMsg();
                   this.$router.push({name: 'home'}); 
                })
                .catch((response) => {
                    loader.hide(); 
                    this.showErrorMsg();
                    this.$router.push({name: 'home'}); 
                });
            },
            validateBeforeSubmit() {
                let app = this;
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        app.saveUser();
                        return;
                    }

                    this.showWarningMsg();
                });
            }
        }
    }
</script>

<style scoped>

</style>