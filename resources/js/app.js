import './bootstrap';
import 'swiper/css';
import 'swiper/css/autoplay';
import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

import Alpine from 'alpinejs';


const swiper = new Swiper('.mySwiper', {
  modules: [Autoplay],
  loop: true,
  autoplay: {
    delay: 3000, // 3 detik
    disableOnInteraction: false,
  },
});

window.Alpine = Alpine;

Alpine.start();
