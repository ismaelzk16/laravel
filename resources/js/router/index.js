import {createWebHistory, createRouter} from "vue-router";

import Home from '../components/Home.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import AddPosts from '../components/AddPost.vue';
import Posts from '../components/Post.vue';
import EditPosts from '../components/EditPost.vue';
import Users from '../components/Users.vue';
import Partidos from '../components/Partidos.vue';
import AddPartidos from '../components/AddPartidos.vue';
import EditPartidos from '../components/EditPartidos.vue';

export const routes = [

    {
      name: 'home',
      path: '/',
      component: Home
    },

    {
      name: 'login',
      path: '/login',
      component: Login
    },
    {
      name: 'register',
      path: '/register',
      component: Register
    },
    {
      name: 'addpost',
      path: '/posts/add',
      component: AddPosts
    },
    {
      name: 'posts',
      path: '/posts',
      component: Posts
    },
    {
      name: 'editPost',
      path: '/editpPosts/edit',
      component: EditPosts
    },
    {
      name: 'users',
      path: '/users',
      component: Users
    },
    {
      name: 'partidos',
      path: '/partidos',
      component: Partidos
    },
    {
      name: 'addPartidos',
      path: '/addPartidos',
      component: AddPartidos
    },
    {
    name: 'editPartidos',
    path: '/editPartidos',
    component: EditPartidos
    }
];

const router = createRouter({
  history:createWebHistory(),
  routes: routes,
});

export default router;

