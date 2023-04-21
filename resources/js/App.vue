<template>
<!--        <nav class="navbar navbar-expand-sm mb-4">-->
<!--            <a class="navbar-brand" href="#"><img src="" alt=""></a>-->
<!--            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"-->
<!--                    aria-expanded="false" aria-label="Toggle navigation"></button>-->
<!--            <div class="navbar-nav" v-if="isLoggedin">-->

<!--            </div>-->
<!--            <div class="navbar-nav" v-else>-->
<!--                <router-link to="/" class="nav-item nav-link">Home</router-link>-->
<!--                <router-link to="/login" class="nav-item nav-link">Login</router-link>-->
<!--                <router-link to="/register" class="nav-item nav-link">Register</router-link>-->
<!--            </div>-->
<!--        </nav>-->
<!--        </div>-->
    <div style="background-size: 90%; background-color: white; max-width: 100%;">
              <img style="background-color: #fff" src="http://statics.proyectoclubes.com/images/header/logo-rayo.png?20230103174823" alt="Logo Rayo" class="loading" data-was-processed="true">
                <div class="navbar"> <!--v-if=" isLoggedin "-->
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                     <router-link to="/login" class="nav-item nav-link">Login</router-link>
                    <router-link to="/register" class="nav-item nav-link">Register</router-link>
                    <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
                    <router-link to="/posts" class="nav-item nav-link">xxxx</router-link>
                    <a class="nav-item nav-link" style="cursor: pointer;" @click="logout">Logout</a>
                <div class="subnav">
                    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#bring">Bring</a>
                        <a href="#deliver">Deliver</a>
                        <a href="#package">Package</a>
                        <a href="#express">Express</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#link1">Link 1</a>
                        <a href="#link2">Link 2</a>
                        <a href="#link3">Link 3</a>
                        <a href="#link4">Link 4</a>
                    </div>
                </div>
                <a href="#contact">Contact</a>
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
