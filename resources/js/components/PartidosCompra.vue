<template>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between pb-2 mb-2">
          <h5 class="card-title">Comprar entradas</h5>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead class="bg-dark text-light">
              <tr>
                <th>Jornada</th>
                <th>Fecha</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(partido, index) in partidos.filter(p => p.situacion !== 'done')" :key="index">
                <td>
                  <strong>Jornada:</strong> {{partido.jornada}}<br>
                  <strong>Equipo Local:</strong> {{partido.equipoLocal}}<br>
                  <strong>Equipo Visitante:</strong> {{partido.equipoVisitante}}<br>
                  <strong>Ubicacion:</strong> {{partido.ubicacion}}
                </td>
                <td>
                  <strong>Fecha:</strong> {{partido.fecha}}
                </td>
                <td class="text-center">
                  <router-link :to="{ name: 'Entradas', params: { id: partido.id } }" class="btn btn-primary">Compra Entradas</router-link>
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
    }
  };
  </script>
  