<template>
    <div class="ticket-sales">
        <h2>Carrito de Entradas</h2>
        <div v-if="entradas.length === 0" class="empty-cart">
            <p>No hay entradas en el carrito</p>
        </div>
        <div v-else>
            <div v-for="(entrada, index) in entradas" :key="index" class="carrito">
                <p>Sección: {{ entrada.seccion }}</p>
                <p>Fila: {{ entrada.fila }}</p>
                <p>Número: {{ entrada.numero }}</p>
                <p>Precio: {{ entrada.precio }}</p>
                <p>ID de partido: {{ entrada.id_partido }}</p>
                <button @click="borrarEntrada(index)" class="btn btn-danger">Borrar entrada</button>
            </div>
            <button @click="realizarCompra" class="btn btn-dark">Realizar Compra</button>
            <p v-if="mostrarMensaje" class="success-message">Compra realizada con éxito</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      entradas: [],
      mostrarMensaje: false,
    };
  },

  created() {
    axios.get('/api/entradas/get')
      .then(response => {
        console.log(window.Laravel.user.id);
        this.entradas = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },

  methods: {
    realizarCompra() {
      axios.post('/api/realizarCompra')
        .then(response => {
          // Mostrar mensaje de confirmación
          this.mostrarMensaje = true;
          // Borrar las entradas del carrito
          this.entradas = [];
          sessionStorage.setItem("entradas", JSON.stringify(this.entradas));
        })
        .catch(error => {
          console.log(error);
        });
    },
    borrarEntrada(index) {
      this.entradas.splice(index, 1);
      sessionStorage.setItem("entradas", JSON.stringify(this.entradas));
    }
  }
};
</script>
