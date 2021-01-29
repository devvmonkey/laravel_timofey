<template>
    <div>
        <h2>Edit user</h2>
        <div>
            <div class="form-group">
                <label for="first_name">First name:</label>
                <input v-validate="'required|alpha_spaces'" :class="['form-control', {'is-invalid': errors.has('first_name')}]" name="first_name" type="text" id="first_name" class="form-control" v-model="user.first_name">

                <div v-show="errors.has('first_name')" class="invalid-feedback">
                    {{ errors.first('first_name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="last_name">Last name:</label>
                <input v-validate="'required|alpha_spaces'" name="last_name" :class="['form-control', {'is-invalid': errors.has('last_name')}]" type="text" id="last_name" class="form-control" v-model="user.last_name">

                <div v-show="errors.has('last_name')" class="invalid-feedback">
                    {{ errors.first('last_name') }}
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input v-validate="'required|email'" name="email" :class="['form-control', {'is-invalid': errors.has('email')}]" type="email" id="email" class="form-control" v-model="user.email">
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
        mounted(){
            this.userId = this.$route.params.id;
            axios.get(`/api/users/${this.userId}`).then((response) => {
                this.user = response.data;
            });
        },
        data(){
          return {
              user: {
                  first_name: '',
                  last_name: '',
                  email: ''
              },
              userId: 0
          }
        },
         notifications: {
            showSuccessMsg: {
              type: 'success',
              title: 'User edited',
              message: 'The user information has been edited successfull'
            },
            showErrorMsg: {
                type: 'error',
                title: 'Something went wrong',
                message: 'Something happend editing the user, try again later'
            },
            showWarningMsg: {
                type: 'warn',
                title: 'Correct the errors',
                message: 'You have to fix the errors in order to edit the user'
            }
        },
        methods: {
            goToHome(){
                this.$router.push({name: 'home'});
            },
            saveUser(){
                let loader = this.$loading.show();
                let app = this;
                let newUser = app.user;
                axios.put(`/api/users/${this.userId}`, newUser).then((response) =>{
                    loader.hide();
                    this.showSuccessMsg();
                    this.goToHome();
                })
                .catch((response)=>{
                    this.showErrorMsg();
                    this.goToHome();
                })
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