<template>
    <div style="background-size: 90%; background-color: #007dbe; max-width: 100%;">
        <div style="width: 100%; background-color: #fff;">
              <img style="background-color: #fff" src="http://statics.proyectoclubes.com/images/header/logo-rayo.png?20230103174823" alt="Logo Rayo" class="loading" data-was-processed="true">
        </div>
                <div class="navbar"> <!--v-if=" isLoggedin "-->
<!--                    <router-link to="/" class="subnavbtn">Home</router-link>-->
<!--                    <router-link to="/dashboard" class="subnavbtn">Dashboard</router-link>-->
<!--                    <router-link to="/users" class="subnavbtn">Users</router-link>-->
<!--                    <router-link v-if="isLoggedin" to="/addPartidos" class="subnavbtn">Add Partidos</router-link>-->
<!--                    <router-link to="/login" class="subnavbtn">Login</router-link>-->
<!--                    <router-link to="/register" class="nav-item nav-link">Register</router-link>-->
<!--                    <a class="nav-item nav-link" style="cursor: pointer;" @click="logout">Logout</a>-->
                <div class="subnav">
                    <router-link to="/" class="subnavbtn" :class="{ activenav: currentPage === '/' }">Home</router-link>
                </div><div class="subnav">
                    <a href="/dashboard" class="subnavbtn">Dashboard <i class="fa fa-caret-down"></i></a>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div><div class="subnav">
                    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div><div class="subnav">
                    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Usuario <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Log In</a>
                        <a href="/register">Registro</a>
                        <a href="#careers" v-if="isLoggedin">Log Out</a>
                    </div>
                </div>
                <div class="navbar-posterior"></div>
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
<style>
.nav-button {
    background-color: #ccc;
}

.nav-button.active {
    background-color: #F00; /* Cambia el color aquí */
}
</style>
