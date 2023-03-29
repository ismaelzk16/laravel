<template>
   <div class="container">
       <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
           <a class="navbar-brand" href="#">Laravel Vue 3</a>
           <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                   aria-expanded="false" aria-label="Toggle navigation"></button>
           <div class="navbar-nav" v-if="isLoggedIn">
               <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
               <router-link to="/posts" class="nav-item nav-link">xxxx</router-link>
               <a class="nav-item nav-link" style="cursor: pointer;">Logout</a>
           </div>
           <div class="navbar-nav" v-else>
               <router-link to="/" class="nav-item nav-link">Home</router-link>
               <router-link to="/login" class="nav-item nav-link">Login</router-link>
               <router-link to="/register" class="nav-item nav-link">Register</router-link>
           </div>
       </nav>


       <router-view></router-view>
   </div>
</template>
<script>
export default {
   name: "App",
   data() {
       return {
        isLoggedIn: false,
       }
   },
   created() {
   },
   methods: {
    if(windows:Laravel.isLoggedIn){
        this.isLoggedIn = true;
    }

   },
}
</script>
