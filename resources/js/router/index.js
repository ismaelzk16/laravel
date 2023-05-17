import {createWebHistory, createRouter} from "vue-router";

import Home from '../components/Home.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import AddPosts from '../components/AddPost.vue';
import Posts from '../components/Post.vue';
import EditPosts from '../components/EditPost.vue';
import Users from '../components/Users.vue';
import Partidos from '../components/Partidos.vue';
import PartidosCompra from '../components/PartidosCompra.vue';
import AddPartidos from '../components/AddPartidos.vue';
import EditPartidos from '../components/EditPartidos.vue';
import UsersPanel from '../components/UsersPanel.vue';
import Entradas from '../components/Entradas.vue';
import Carrito from '../components/Carrito.vue';
import AddUsers from '../components/AddUsers.vue';
import EditUsers from '../components/EditUsers.vue';
import Noticia1 from '../components/noticia1.vue';
import Noticia2 from '../components/noticia2.vue';
import Noticia3 from '../components/noticia3.vue';
import Noticia4 from '../components/noticia4.vue';
import Club1 from '../components/Club.vue';
import Club2 from '../components/Club2.vue';
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
      name: 'partidosCompra',
      path: '/partidosCompra',
      component: PartidosCompra
    },
    {
      name: 'addPartidos',
      path: '/addPartidos',
      component: AddPartidos
    },
    {
        path: '/partidos/:id/edit',
        name: 'editPartidos',
        component: EditPartidos,
        props: true
    },
    {
        name: 'usersPanel',
        path: '/usersPanel',
        component: UsersPanel,
    },
    {
      name: 'Entradas',
      path: '/entradas/:id',
      component: Entradas,
    },
    {
      name: 'carrito',
      path: '/carrito',
      component: Carrito,
    },
    {
        name: 'addUsers',
        path: '/addUsers',
        component: AddUsers,
    },
    {
        name: 'editUsers',
        path: '/users/:id/edit',
        component: EditUsers,
    },
    {
      name: 'noticia1',
      path: '/noticia1',
      component: Noticia1,
    },
    {
      name: 'noticia2',
      path: '/noticia2',
      component: Noticia2,
    },
    {
      name: 'noticia3',
      path: '/noticia3',
      component: Noticia3,
    },
    {
      name: 'noticia4',
      path: '/noticia4',
      component: Noticia4,
    },
    {
      name: 'club1',
      path: '/club1',
      component: Club1
    },
    {
      name: 'club2',
      path: '/club2',
      component: Club2
    }
];

const router = createRouter({
  history:createWebHistory(),
  routes: routes,
});

export default router;

