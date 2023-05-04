<template>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between pb-2 mb-2">
                <h5 class="card-title">All Posts Data</h5>
                <div>
                    <button class="btn btn-success" type="button" @click="this.$router.push('/partidos/add')">New Post</button>
                </div>
            </div>

            <table class="table table-hover table-sm">
                <thead class="bg-dark text-light">
                <tr>
                    <th>#</th>
                    <th>Goles Locales</th>
                    <th>Goles Visitantes</th>
                    <th>Jornada</th>
                    <th>Situacion</th>
                    <th>Fecha</th>
                    <th>Equipo Local</th>
                    <th>Equipo Visitante</th>
                    <th>Ubicacion</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(partido, index) in partidos" :key="index">
                    <td class="text-center">{{index}}</td>
                    <td>{{partido.golesLocales}}</td>
                    <td>{{partido.golesVisitantes}}</td>
                    <td>{{partido.jornada}}</td>
                    <td>{{partido.situacion}}</td>
                    <td>{{partido.fecha}}</td>
                    <td>{{partido.equipoLocal}}</td>
                    <td>{{partido.equipoVisitante}}</td>
                    <td>{{partido.ubicacion}}</td>
                    <td class="text-center">
                        <router-link :to="{ name: 'editPartidos', params: { id: partido.id_partidos } }" class="btn btn-warning">Edit</router-link>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            partidos: [],
            strSuccess: '',
            strError: ''
        };
    },
    created() {
        this.$axios
            .get('/sanctum/csrf-cookie')
            .then((response) => {
                this.$axios
                    .get('api/partidos')
                    .then((response) => {
                        this.partidos = response.data;
                        console.log(response.data);
                        console.log('BUENAS');
                        console.log(window.Laravel.user.rol_id);
                        console.log('TARDES');

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {}
};
</script>
