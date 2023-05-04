<template>
    <div style="background-size: 90%; background-color: #007dbe; max-width: 100%;">
        <div style="width: 100%; background-color: #fff;">
              <img style="background-color: #fff" src="http://statics.proyectoclubes.com/images/header/logo-rayo.png?20230103174823" alt="Logo Rayo" class="loading" data-was-processed="true">
        </div>
                <div class="navbar"> <!--v-if=" isLoggedin "-->
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/posts" class="nav-item nav-link">Dashboard</router-link>
                    <router-link to="/users" class="nav-item nav-link">Users</router-link>
                    <router-link v-if="isLoggedin" to="/addPartidos" class="nav-item nav-link">Add Partidos</router-link>
                    <router-link v-if="isLoggedin" to="/partidos" class="nav-item nav-link">Partidos</router-link>
                    <router-link to="/login" class="nav-item nav-link">Login</router-link>
                    <router-link to="/register" class="nav-item nav-link">Register</router-link>
                    <a class="nav-item nav-link" style="cursor: pointer;" @click="logout">Logout</a>
                <div class="subnav">
                    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
        </template>
        <script>
        export default {
            name: "App",
            data() {
                return {
                    isLoggedin: false,
                }
            },
            created() {
                if(window.Laravel.isLoggedin){
                    this.isLoggedin =true;
                }
            },
            methods: {
                logout(e) {
                    e.preventDefault()
                    this.$axios.get('/sanctum/csrf-cookie').then(response => {
                        this.$axios.post('api/logout')
                            .then(response => {
                                if (response.data.success) {
                                    window.location.href = "/"
                                } else {
                                    console.log(response);
                                }
                            })
                            .catch(function (error) {
                                console.error(error);
                            });
                    })


                }
            },
        }
        </script>
