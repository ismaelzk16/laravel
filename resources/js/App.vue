<template>
    <div class="logoweb">
        <div style="width: 100%; background-color: #fff; padding: 0 15% 0 15%;">
              <img style="background-color: #fff" src="http://statics.proyectoclubes.com/images/header/logo-rayo.png?20230103174823" alt="Logo Rayo" class="loading" data-was-processed="true">
        </div>
        <div class="conenedor-nav">
        <div class="conenedor-nav-red">
                <div class="navbar"> <!--v-if=" isLoggedin "-->

<!--                    <router-link to="/" class="subnavbtn">Home</router-link>-->
<!--                    <router-link to="/dashboard" class="subnavbtn">Dashboard</router-link>-->
<!--                    <router-link to="/users" class="subnavbtn">Users</router-link>-->
<!--                    <router-link v-if="isLoggedin" to="/addPartidos" class="subnavbtn">Add Partidos</router-link>-->
<!--                    <router-link to="/login" class="subnavbtn">Login</router-link>-->
<!--                    <router-link to="/register" class="nav-item nav-link">Register</router-link>-->
<!--                    <a class="nav-item nav-link" style="cursor: pointer;" @click="logout">Logout</a>-->
<!--                <div class="subnav">-->
<!--                    <router-link to="/" class="subnavbtn" :class="{ activenav: currentPage === '/' }">Home</router-link>-->
<!--                </div>-->
                <div class="subnav">
                    <button class="subnavbtn">Home</button>
                    <div class="subnav-content">
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Noticias</button>
                    <div class="subnav-content">
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Equipo</button>
                    <div class="subnav-content">
                        <a href="#team">Partidos</a>
                        <a href="#company">Plantilla</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Entradas</button>
                    <div class="subnav-content">
                        <a href="#company">Calendario</a>
                        <a href="#team">Compra</a>
                        <a href="#careers">Pabellón</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Usuario</button>
                    <div class="subnav-content">
                        <a href="/login">Log In</a>
                        <a href="/register">Registro</a>
                        <a href="#careers" v-if="isLoggedin">Log Out</a>
                    </div>
                </div>
                    <div class="navbar-inferior"></div>
                </div>
                </div>
        </div>
        <div class="contenedor">
                <router-view></router-view>
        </div>
        </div>
        </template>
<style>

</style>
<script>
        export default {
            name: "App",
            data() {
                return {
                    isLoggedin: false,
                    currentPage: ''
                }
            },
            mounted() {
                this.currentPage = window.location.pathname;
            },
            created() {
                if(window.Laravel.isLoggedin){
                    this.isLoggedin =true;
                };
                this.currentPage = this.$route.path;
                this.$watch('$route', () => {
                    this.currentPage = this.$route.path;
                });
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
                },
                    computed: {
                        activeButton()
                        {
                            return {
                                'nav-button': true,
                                'active': this.currentPage === this.$route.path
                            }
                        }
                    }
                }
            }
        </script>
