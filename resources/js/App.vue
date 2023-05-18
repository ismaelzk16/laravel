<template>
    <div class="logoweb">
        <div style="width: 100%; background-color: #fff; padding: 0 15% 0 15%;">
            <img style="background-color: #fff" src="http://statics.proyectoclubes.com/images/header/logo-rayo.png?20230103174823" alt="Logo Rayo" class="loading" data-was-processed="true">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="conenedor-nav">
            <div class="conenedor-nav-red">
            <div class="navbar">
                    <div class="subnav">
                    <button class="subnavbtn"><a href="/">HOME</a></button>
                    <div class="subnav-content">
                    </div>
                </div>
                    <div class="subnav">
                    <button class="subnavbtn">EQUIPO</button>
                    <div class="subnav-content">
                        <a href="/plantilla">PLANTILLA</a>
                        <a href="/club1">HISTORIA DEL CLUB</a>
                        <a href="/club2">ACTUALIDAD DEL CLUB</a>
                        <a href="/pabellon">PABELLÓN</a>
                    </div>
                </div>
                    <div class="subnav">
                    <button class="subnavbtn">ENTRADAS</button>
                    <div class="subnav-content">
                        <a href="/partidos" v-if="isLoggedin">PARTIDOS</a>
                        <a href="/partidosCompra">COMPRA</a>
                        <a href="/carrito">CARRITO</a>
                    </div>
                </div>
                    <div class="subnav">
                    <button class="subnavbtn">USUARIO</button>
                    <div class="subnav-content">
                        <a href="/login">LOG IN</a>
                        <a href="/register">REGISTRO</a>
                        <a href="/usersPanel">USERS</a>
                        <a @click="logout" v-if="isLoggedin">CERRAR SESION</a>
                    </div>
                </div>
                    <div class="navbar-inferior"></div>
                </div>
        </div>
        </div>
            </div>
        <div class="contenedor">
                <router-view></router-view>
        </div>
        <footer style="background-color: #e21921; color:#ffffff;">
                <div style="text-align: center; padding-top: 10px;">
                    <p>Copyright © Rayo Vallecano Baloncesto de Madrid SAD |
                        <a href="#">Política de Privacidad</a> |
                        <a href="#">Términos y Condiciones</a></p>
                </div>
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
