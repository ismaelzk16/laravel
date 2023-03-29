import {createWebHistory, createRouter} from "vue-router";

import Login from '../components/Login.vue';

export const routes = [

   {
       name: 'login',
       path: '/login',
       component: Login
   },
];

const router = createRouter({
  history:createWebHistory(),
  routes: routes,
});

export default router;

