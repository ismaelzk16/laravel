<template>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between pb-2 mb-2">
          <h5 class="card-title">All Posts Data</h5>
          <div>
            <button class="btn btn-success" type="button" @click="this.$router.push('/partidos/add')">New Post</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
                <th>Télefono</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(user, index) in users" :key="index">
                <td class="text-center">{{index}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.password}}</td>
                <td>{{user.phone}}</td>
                <td class="text-center">
                  <div class="d-flex justify-content-center">
                    <router-link :to="{ name: 'editUsers', params: { id: user.id } }" class="btn btn-warning mr-2">Edit</router-link>
                    <button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
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
        users: [],
        strSuccess: '',
        strError: ''
      };
    },
    created() {
      this.$axios
        .get('/sanctum/csrf-cookie')
        .then((response) => {
          this.getUsers();
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    methods: {
      getUsers() {
        this.$axios
          .get('api/users')
          .then((response) => {
            this.users = response.data;
          })
          .catch(function (error) {
            console.log(error);
          });
      },
      deleteUser(id) {
        console.log(id);
        this.$axios
          .delete(`api/users/${id}`)
          .then((response) => {
            console.log(response.data.success);
            // volver a cargar los datos de los usuarios
            this.getUsers();
          })
          .catch(function (error) {
            console.log(error);
          });
      }
    }
  };
  </script>
  