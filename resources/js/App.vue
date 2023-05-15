<template>
    <div class="logoweb">
        <div style="width: 100%;background-color: #fff; padding: 0 15% 0 15%;">
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
                    <button class="subnavbtn"><a href="/">HOME</a></button>
                    <div class="subnav-content">
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn"><a href="/noticias">NOTICIAS</a></button>
                    <div class="subnav-content">
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn"><a href="/equipo">EQUIPO</a></button>
                    <div class="subnav-content">
                        <a href="/plantilla">PLANTILLA</a>
                        <a href="/pabellon">PABELLÓN</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn"><a href="/entradas">ENTRADAS</a></button>
                    <div class="subnav-content">
                        <a href="/partidos">PARTIDOS</a>
                        <a href="/calendario">CALENDARIO</a>
                        <a href="/compra">COMPRA</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn" ><a href="">USUARIO</a></button>
                    <div class="subnav-content">
                        <a href="/login">LOG IN</a>
                        <a href="/register">REGISTRO</a>
                        <a href="/logout" v-if="isLoggedin">CERRAR SESION: </a>
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
        <footer style="background-color: #e21921; color:#ffffff;">
                <div style="text-align: center; padding-top: 10px;">
                    <p>Copyright © Rayo Vallecano Baloncesto de Madrid SAD |
                        <a href="#">Política de Privacidad</a> |
                        <a href="#">Términos y Condiciones</a></p>
                </div>
            <footer>
                <ul class="footer-menu">
                    <li class="footer-item"><a href="/">HOME</a></li>
                    <li class="footer-item"><a href="/noticias">NOTICIAS</a></li>
                    <li class="footer-item"><a href="/equipo">EQUIPO</a>
                        <ul class="subnav-content">
                            <li><a href="/plantilla">PLANTILLA</a></li>
                            <li><a href="/pabellon">PABELLÓN</a></li>
                        </ul>
                    </li>
                    <li class="footer-item"><a href="/entradas">ENTRADAS</a>
                        <ul class="subnav-content">
                            <li><a href="/partidos">PARTIDOS</a></li>
                            <li><a href="/calendario">CALENDARIO</a></li>
                            <li><a href="/compra">COMPRA</a></li>
                        </ul>
                    </li>
                    <li class="footer-item"><a href="">USUARIO</a>
                        <ul class="subnav-content">
                            <li><a href="/login">LOG IN</a></li>
                            <li><a href="/register">REGISTRO</a></li>
                            <li v-if="isLoggedin"><a href="/logout">CERRAR SESION</a></li>
                        </ul>
                    </li>
                </ul>
            </footer>

        </footer>
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
