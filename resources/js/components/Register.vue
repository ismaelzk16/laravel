<template>
    <div class="container">
        <div class="row jutify-content-center">
            <div class="col-md-8">
                <div v-if="error !== null" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{error}}</strong>
                </div>


                <div class="card card-default">
                    <div class="card-header"><h5>Crear entradas</h5></div>
                    <div class="card-body">
                        <form>


                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" v-model="name" required
                                           autofocus autocomplete="off"  placeholder="Elige el nombre">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input id="email" type="mail" class="form-control" v-model="email" required
                                           autofocus autocomplete="off">
                                </div>
                            </div>




                            <div class="form-group row mt-1">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-8">
                                    <input id="password" type="pass" class="form-control" v-model="password"
                                           required autocomplete="off" placeholder="Elige contraseña">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-8">
                                    <input id="phone" type="phone" class="form-control" v-model="phone"
                                           required autocomplete="off" placeholder="Pon el precio" min="9" max="9">
                                </div>
                            </div>

                            <div class="form-group row mt-1 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success" @click="register">
                                        Register
                                    </button>
                                </div>
                            </div>


                            <div class="row mt-1">
                                <div class="col-md-8 offset-md-4">
                                    <small class="text-muted">
                                        Have an account? Please
                                        <router-link to="/login" >login</router-link>
                                    </small>
                                </div>
                            </div>




                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</template>


<script>
    export default {
       name: "Register"
       ,data() {
           return {
               name:"",
               email:"",
               password:"",
               phone:"",
               error: null
           }
       },
       methods: {
           register(e){
               e.preventDefault()
               if(this.password.length > 0) {
                   this.$axios.get('/sanctum/csrf-cookie').then(response => {
                       this.$axios.post('api/register', {
                           name: this.name,
                           email: this.email,
                           password: this.password,
                           phone: this.phone
                       })
                           .then(response => {
                               if (response.data.success) {
                                   //window.location.href = "/login"
                               } else {
                                   this.error = response.data.message
                               }
                           })
                           .catch(function (error) {
                               console.error(error);
                           });
                   })
               }
           }
       }


    }
    </script>

