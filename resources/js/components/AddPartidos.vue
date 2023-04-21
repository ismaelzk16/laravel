<template>
    <div class="container">
        <div class="row jutify-content-center">
            <div class="col-md-8">
                {{name}}
                <div v-if="error !== null" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{error}}</strong>
                </div>


                <div class="card card-default">
                    <div class="card-header"><h5>Crear entradas</h5></div>
                    <div class="card-body">
                        <form>


                            <div class="form-group row">
                                <label for="golesLocales" class="col-sm-4 col-form-label text-md-right">Goles Locales</label>
                                <div class="col-md-8">
                                    <input id="golesLocales" type="number" class="form-control" v-model="golesLocales" required
                                           autofocus autocomplete="off"  placeholder="Elige el partido">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="golesVisitantes" class="col-sm-4 col-form-label text-md-right">goles Visitantes</label>
                                <div class="col-md-8">
                                    <input id="golesVisitantes" type="number" class="form-control" v-model="golesVisitantes" required
                                           autofocus autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="form-group row mt-1">
                                <label for="resultado" class="col-md-4 col-form-label text-md-right">Resultado</label>
                                <div class="col-md-8">
                                    <input id="resultado" type="text" class="form-control" v-model="resultado"
                                           required autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                                <div class="col-md-8">
                                    <input id="precio" type="number" class="form-control" v-model="situacion"
                                           required autocomplete="off" placeholder="Pon el precio" min="1" max="200">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                                <div class="col-md-8">
                                    <input id="precio" type="number" class="form-control" v-model="fecha"
                                           required autocomplete="off" placeholder="Pon el precio" min="1" max="200">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                                <div class="col-md-8">
                                    <input id="precio" type="number" class="form-control" v-model="equipoLocal"
                                           required autocomplete="off" placeholder="Pon el precio" min="1" max="200">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                                <div class="col-md-8">
                                    <input id="precio" type="number" class="form-control" v-model="equipoVisitante"
                                           required autocomplete="off" placeholder="Pon el precio" min="1" max="200">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                                <div class="col-md-8">
                                    <input id="precio" type="number" class="form-control" v-model="ubicacion"
                                           required autocomplete="off" placeholder="Pon el precio" min="1" max="200">
                                </div>
                            </div>

                            <div class="form-group row mt-1 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success" @click="añadir">
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
       name: "Añadir"
       ,data() {
           return {
               golesLocales:"",
               golesVisitantes:"",
               resultado:"",
               situacion:"",
               fecha:"",
               equipoLocal:"",
               equipoVisitante:"",
               ubicacion:"",
               error: null
           }
       },
       methods: {
            añadir(e){
               e.preventDefault()
               if(this.password.length > 0) {
                   this.$axios.get('/sanctum/csrf-cookie').then(response => {
                       this.$axios.post('api/añadir', {
                           name: this.name,
                           golesLocales: this.golesLocales,
                           golesVisitantes: this.golesVisitantes,
                           resultado: this.resultado,
                           situacion: this.situacion,
                           fecha: this.fecha,
                           equipoLocal: this.equipoLocal,
                           equipoVisitante: this.equipoVisitante,
                           ubicacion: this.ubicacion,
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
    
