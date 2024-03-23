<template>
  <div class="container">
    <div class="slider-container">
      <swiper :options="swiperOptions" @mousemove="onMouseMove" class="slay">
        <swiper-slide v-for="(item, index) in items" :key="index">
          <!-- Aquí coloca el contenido de cada slide -->
          <div class="slide-item">{{ item }}dfsd
            <div class="card d ">fda</div>
        </div>
        </swiper-slide>
      </swiper>
    </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide } from 'vue-awesome-swiper';
import 'swiper/swiper-bundle.css';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      items: ['Slide 1', 'Slide 2', 'Slide 3', 'Slide 4', 'Slide 5', 'Slide 6', 'Slide 7', 'Slide 8'],
      swiperOptions: {
        slidesPerView: 8, // Muestra 8 slides en una fila
        spaceBetween: 10, // Espacio entre los slides
      },
    };
  },
  methods: {
    onMouseMove(event) {
      // Calcular la velocidad del mouse y ajustar la velocidad de deslizamiento
      const sensitivity = 0.1; // Puedes ajustar esto para cambiar la sensibilidad del desplazamiento
      this.$refs.swiper.swiperRef.params.mousewheel.sensitivity = sensitivity;
    },
  },
};
</script>

<style>
.slay {
  background: orange;
}
.d{
    width:300px;
}
.slide-item {
  width: 100%; /* Ancho fijo de 80px para cada slide */
  height: 200px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 24px;
  background-color: #f0f0f0;
  border-radius: 8px;
}
</style>
