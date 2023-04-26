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
                    <div class="card-header"><h5>Añadir Partido</h5></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="golesLocales" class="col-sm-4 col-form-label text-md-right">Goles Locales</label>
                                <div class="col-md-8">
                                    <input id="golesLocales" type="number" class="form-control" v-model="golesLocales"
                                           autofocus autocomplete="off"  placeholder="Número de goles">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="golesVisitantes" class="col-sm-4 col-form-label text-md-right">Goles Visitantes</label>
                                <div class="col-md-8">
                                    <input id="golesVisitantes" type="number" class="form-control" v-model="golesVisitantes"
                                           autofocus autocomplete="off" placeholder="Número de goles">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="jornada" class="col-md-4 col-form-label text-md-right">Jornada</label>
                                <div class="col-md-8">
                                    <input id="jornada" type="text" class="form-control" v-model="jornada"
                                           required autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="situacion" class="col-md-4 col-form-label text-md-right">Situacion</label>
                                <div class="col-md-8">
                                    <input id="situacion" type="text" class="form-control" v-model="situacion"
                                           required autocomplete="off" placeholder="Pon el precio">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                                <div class="col-md-8">
                                    <input id="fecha" type="date" class="form-control" v-model="fecha"
                                           required autocomplete="off" placeholder="Pon el precio">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="equipoLocal" class="col-md-4 col-form-label text-md-right">Equipo Local</label>
                                <div class="col-md-8">
                                    <input id="equipoLocal" type="text" class="form-control" v-model="equipoLocal"
                                           required autocomplete="off" placeholder="Pon el Equipo Local">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="equipoVisitante" class="col-md-4 col-form-label text-md-right">Equipo Visitante</label>
                                <div class="col-md-8">
                                    <input id="equipoVisitante" type="text" class="form-control" v-model="equipoVisitante"
                                           required autocomplete="off" placeholder="Pon el Equipo Visitante">
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label for="ubicacion" class="col-md-4 col-form-label text-md-right">Ubicación</label>
                                <div class="col-md-8">
                                    <input id="ubicacion" type="text" class="form-control" v-model="ubicacion"
                                           required autocomplete="off" placeholder="Pon la ubicacion">
                                </div>
                            </div>

                            <div class="form-group row mt-1 mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success" @click="anadir">
                                        Register
                                    </button>
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
            jornada:"",
            situacion:"",
            fecha:"",
            equipoLocal:"",
            equipoVisitante:"",
            ubicacion:"",
            error: null
        }
    },
    methods: {
        anadir(e){
            e.preventDefault()
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post('api/anadir', {
                    golesLocales: this.golesLocales,
                    golesVisitantes: this.golesVisitantes,
                    jornada: this.jornada,
                    situacion: this.situacion,
                    fecha: this.fecha,
                    equipoLocal: this.equipoLocal,
                    equipoVisitante: this.equipoVisitante,
                    ubicacion: this.ubicacion,
                })
                    .then(response => {
                        if (response.data.success) {
                            console.log(response.data);

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
</script>

