<template>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between pb-2 mb-2">
          <h5 class="card-title">Panel de control</h5>
          <div>
            <button class="btn btn-success" type="button" @click="this.$router.push('/addPartidos')">New Post</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Jornada</th>
                  <th>Situacion</th>
                  <th>Fecha</th>
                  <th>Equipo Local</th>
                  <th>Puntos Locales</th>
                  <th>Puntos Visitantes</th>
                  <th>Equipo Visitante</th>
                  <th>Ubicacion</th>
                  <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(partido, index) in partidos" :key="index">
                <td class="text-center">{{index}}</td>
                <td>{{partido.jornada}}</td>
                  <td>{{partido.situacion}}</td>
                  <td>{{partido.fecha}}</td>
                  <td>{{partido.equipoLocal}}</td>
                  <td>{{partido.golesVisitantes}}</td>
                  <td>{{partido.golesLocales}}</td>
                  <td>{{partido.equipoVisitante}}</td>
                <td>{{partido.ubicacion}}</td>
                <td class="text-center">
                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <router-link :to="{ name: 'editPartidos', params: { id: partido.id } }" class="btn btn-warning mb-2">Edit</router-link>
                    <button class="btn btn-danger" @click="deletePartido(partido.id)">Delete</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
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
          this.getPartidos();
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    methods: {
      getPartidos() {
        console.log("Nombre de rol: " + "{{ Auth::user()->roles[0]->nombre_rol }}");
        this.$axios
          .get('api/partidos')
          .then((response) => {
            this.partidos = response.data;
          })
          .catch(function (error) {
            console.log(error);
          });
      },
      deletePartido(id) {
        this.$axios
          .delete(`api/partidos/${id}`)
          .then((response) => {
            console.log(response.data.success);
            // volver a cargar los datos de los partidos
            this.getPartidos();
          })
          .catch(function (error) {
            console.log(error);
          });
      }
    }
  };
  </script>
