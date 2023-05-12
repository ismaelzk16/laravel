<template>
    <div>
        <h2>Editar Partido</h2>
        <form @submit.prevent="editarPartido">
            <div class="form-group">
                <label for="goles-locales">Goles locales</label>
                <input type="number" class="form-control" id="goles-locales" v-model="golesLocales">
            </div>
            <div class="form-group">
                <label for="goles-visitantes">Goles visitantes</label>
                <input type="number" class="form-control" id="goles-visitantes" v-model="golesVisitantes">
            </div>
            <div class="form-group">
                <label for="jornada">Jornada</label>
                <input type="number" class="form-control" id="jornada" v-model="jornada">
            </div>
            <div class="form-group">
                <label for="situacion">Situacion</label>
                <input type="text" class="form-control" id="situacion" v-model="situacion">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" v-model="fecha">
            </div>
            <div class="form-group">
                <label for="equipo-local">Equipo Local</label>
                <input type="text" class="form-control" id="equipo-local" v-model="equipoLocal">
            </div>
            <div class="form-group">
                <label for="equipo-visitante">Equipo Visitante</label>
                <input type="text" class="form-control" id="equipo-visitante" v-model="equipoVisitante">
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicacion</label>
                <input type="text" class="form-control" id="ubicacion" v-model="ubicacion">
            </div>
            <route-link></route-link>
            <button class="btn btn-danger" >Update</button>
        </form>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            // id:"",
            partido: {},
            golesLocales:"",
            golesVisitantes:"",
            jornada:"",
            situacion:"",
            fecha:"",
            equipoLocal:"",
            equipoVisitante:"",
            ubicacion:"",

        }
    },
    created() {
        this.$axios.get(`/api/partidos/${this.id}`)
            .then(response => {
                this.partido = response.data
            })
            .catch(error => {
                console.log(error)
            })
    },
    methods: {
        editarPartido() {
            const formData = new FormData();;
            formData.append('golesLocales', this.golesLocales);
            formData.append('golesVisitantes', this.golesVisitantes);
            formData.append('jornada', this.jornada);
            formData.append('situacion', this.situacion);
            formData.append('fecha', this.fecha);
            formData.append('equipoLocal', this.equipoLocal);
            formData.append('equipoVisitante', this.equipoVisitante);
            formData.append('ubicacion', this.ubicacion);
            this.$axios.post(`/api/partidos/${this.id}/edit`, formData)
                .then(response => {
                    //console.log(response.data.success (Es este))
                    console.log('response.data');
                    console.log(response.data);
                    // redirigir a la página de lista de partidos
                    //this.$router.push({ name: 'allPartidos' })
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
