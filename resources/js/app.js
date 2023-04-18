import './bootstrap';

import {createApp} from 'vue';
import App from './App.vue';
import axios from 'axios';
import router from './routes/index';

const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
app.mount('#app');


//FUNCIONES DE CARRUSEL DE RESULTADOS
const carouselContent = document.querySelector('.carousel-content');
const slides = carouselContent.querySelectorAll('.slide');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let slideIndex = 0;
const slideWidth = slides[0].clientWidth;

leftArrow.addEventListener('click', () => {
    if (slideIndex > 0) {
        slideIndex--;
        carouselContent.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }
});

rightArrow.addEventListener('click', () => {
    if (slideIndex < slides.length - 1) {
        slideIndex++;
        carouselContent.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }
});

//FUNCIONES DE CARRUSEL DE RESULTADOS
