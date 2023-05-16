<template>
  <div class="container" style="background-color: white; padding: 20px;">
    <div class="row">
      <div class="col-sm-4">
        <h3>Sección</h3>
        <div class="form-group">
          <label>Selecciona una sección:</label>
          <select class="form-control" v-model="selectedSeccion">
            <option v-for="seccion in secciones" :value="seccion">{{seccion}}</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <h3>Fila y Número</h3>
        <div class="form-group">
          <label>Selecciona una fila:</label>
          <select class="form-control" v-model="selectedFila" @change="calcularPrecio()">
            <option v-for="fila in filas" :value="fila">{{fila}}</option>
          </select>
        </div>
        <div class="form-group">
          <label>Selecciona un número:</label>
          <select class="form-control" v-model="selectedNumero">
            <option v-for="numero in numeros" :value="numero">{{numero}}</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <h3>Precio</h3>
        <p>{{precio}}€</p>
      </div>
      <div class="col-sm-12 text-center mt-3">
        <button class="btn btn-primary btn-sm" style="width: 150px;" @click="guardarInformacion()">Guardar</button>
      </div>
    </div>
  </div>
</template>

  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        secciones: ["Norte", "Este", "Sur", "Oeste"],
        filas: ["A", "B", "C", "D", "E"],
        numeros: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
        selectedSeccion: "",
        selectedFila: "",
        selectedNumero: "",
        precio: 0
      };
    },
    watch: {
      // Aquí irían los watchers que ya tienes
    },
    methods: {
      guardarInformacion() {
        const idPartido = this.$route.params.id; // Se obtiene la ID del partido desde la ruta
        const datos = {
            seccion: this.selectedSeccion,
            fila: this.selectedFila,
            numero: this.selectedNumero,
            precio: this.precio,
            id_partido: idPartido
        };
        axios.post('/api/entradas', datos)
            .then(response => {
            // Aquí se podría mostrar un mensaje de éxito y redirigir al usuario a otra página
            console.log("Entrada guardada");
            })
            .catch(error => {
            console.error(error);
            // Aquí se podría mostrar un mensaje de error al usuario
            });
      },
      calcularPrecio() {
        if (this.selectedFila === "A" || this.selectedFila === "B") {
            this.precio = 30;
        } else if (this.selectedFila === "C") {
            this.precio = 25;
        } else if (this.selectedFila === "D" || this.selectedFila === "E") {
            this.precio = 20;
        }
      } 
    }
  };

  </script>
  