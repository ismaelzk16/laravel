<template>
    <div>
        <h2>Editar Partido</h2>
        <form @submit.prevent="editarPartido">
            <div class="form-group">
                <label for="goles-locales">Goles locales</label>
                <input type="text" class="form-control" id="goles-locales" v-model="partido.golesLocales">
            </div>
            <div class="form-group">
                <label for="goles-visitantes">Goles visitantes</label>
                <input type="text" class="form-control" id="goles-visitantes" v-model="partido.golesVisitantes">
            </div>
            <div class="form-group">
                <label for="jornada">Jornada</label>
                <input type="text" class="form-control" id="jornada" v-model="partido.jornada">
            </div>
            <div class="form-group">
                <label for="situacion">Situacion</label>
                <input type="text" class="form-control" id="situacion" v-model="partido.situacion">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="text" class="form-control" id="fecha" v-model="partido.fecha">
            </div>
            <div class="form-group">
                <label for="equipo-local">Equipo Local</label>
                <input type="text" class="form-control" id="equipo-local" v-model="partido.equipoLocal">
            </div>
            <div class="form-group">
                <label for="equipo-visitante">Equipo Visitante</label>
                <input type="text" class="form-control" id="equipo-visitante" v-model="partido.equipoVisitante">
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicacion</label>
                <input type="text" class="form-control" id="ubicacion" v-model="partido.ubicacion">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            partido: {
                golesLocales: '',
                golesVisitantes: '',
                jornada: '',
                situacion: '',
                fecha: '',
                equipoLocal: '',
                equipoVisitante: '',
                ubicacion: ''
            }
        }
    },
    created() {
        this.$axios.get(`/api/partidos/${this.id}`)
            .then(response => {
                this.partido = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    },
    methods: {
        editarPartido() {
            this.$axios.put(`/api/partidos/${this.id}`, this.partido)
                .then(response => {
                    // Manejar la respuesta
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
