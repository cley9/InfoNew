<template>
    <div class="container shadow mb-3 p-4">
        <h1>Populares</h1>
        <div class="d-flex justify-content-between">
            <h6 class="textSubtitleNoti">LAS NOTICIAS MÁS DESTACADAS DE LA SEMANA</h6>
            <!-- <hr class="customHr">  -->
            <!-- <a href="" class="btnPlusNoti">
                <span class="d-flex justify-content-end bg-success- textPlusNoti"><i class="bi bi-plus-square-fill me-2 iconPlusNoti d-flex justify-content-center"></i>Más Noticias</span>
            </a> -->
        </div>
    <hr>
    
        <div class="row- cols-row-md-2- rowUpdateNotiSlay">
            <swiper :options="swiperOptions" @mousemove="onMouseMove" class="slayd-">
        <swiper-slide v-for="(item, index) in items" :key="index">
          <div class="slayder-itemSlay ">{{ item }}
            <div class="col-3- bg-success- colUpdateNotiSlay shadow- g-2 mb-3 me-3">
             <div class="card cardImgNotiSlay">
                <div class="titleNotiSlay p-3">
                 <button class="col-4 col btnInfoNewNotiSlay">infoNew</button>
                    <h4 class="textTitleSlay">Nuevo soundtrack de hiruyuki sawano 2023</h4>
                    <div class="dateNotiSlay">
                        <h6 class="textDateNotiSlay"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-3- bg-success- colUpdateNotiSlay shadow- g-2 mb-3 me-3">
             <div class="card cardImgNotiSlay">
                <div class="titleNotiSlay p-3">
                 <button class="col-4 col btnInfoNewNotiSlay">infoNew</button>
                    <h4 class="textTitleSlay">Nuevo soundtrack de hiruyuki sawano 2023</h4>
                    <div class="dateNotiSlay">
                        <h6 class="textDateNotiSlay"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-3- bg-success- colUpdateNotiSlay shadow- g-2 mb-3 me-3">
             <div class="card cardImgNotiSlay">
                <div class="titleNotiSlay p-3">
                 <button class="col-4 col btnInfoNewNotiSlay">infoNew</button>
                    <h4 class="textTitleSlay">Nuevo soundtrack de hiruyuki sawano 2023</h4>
                    <div class="dateNotiSlay">
                        <h6 class="textDateNotiSlay"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                    </div>
                </div>
             </div>
            </div>
            
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
      items: ['','','','','','','','','',],
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
      /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap'); */
    
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100&display=swap');
      /* font-family: 'Roboto', sans-serif; */
      .colUpdateNotiSlay{
          padding: 10px;
          width:440px;
          height:500px;
        }
        .slayder-itemSlay{
        width: 100%; 
  height: 510px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 24px;
  /* background-color: #f0f0f0; */
  border-radius: 8px;

}
.rowUpdateNotiSlay{
    padding: 10px;
    /* width:380px; */
    height: 500px;
    }
    .btnPlusNoti{
        text-decoration: none;
      
    }
    
    .cardImgNotiSlay{
        /* font-family: 'Roboto', sans-serif; */
        font-family: 'Roboto', sans-serif;
        position:relative;
        /* height: 260px; */
        /* width: 320px; */
        padding: 10px;
        /* width:380px; */
        height:480px;
        /* background:red; */
        background-image: url("/storage/106356.jpg");
        background-size: cover; 
        background-image: 100% 100%;
        transition: background 0.6s ease;
        opacity: 0.9;
        }
        
        .cardImgNoti:hover{
            /* background: red; */
            /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)); */
            /* background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)); */
            /* background: #050E14; */
            /* background-image: url("/storage/3973659-2715822_1200x1200.webp"); */
            
            /* background: #232B30; */
            /* background: #E6E6E6; */
            opacity: 1;
        }
        /* .cardImgNoti:hover,.btnInfoNewNoti:hover{
            background: #7DCEA0;
        } */
        
        
        
        .titleNotiSlay{
            color:white;
            /* padding: ; */
            margin-top: 284px;
            /* background: red; */
        }
        .btnInfoNewNotiSlay{
            background: white;
            border: none;
            border-radius:5px;
            height:24px;
            font-size: 16px;
            font-weight: 500;
            /* font-weight:100; */
    }
    .btnInfoNewNotiSlay:hover{
        /* background: #FF5733; */
        background: #7DCEA0;
        color: white;
        /* background: #2C3E50; */
    }
    
    
    .mi-div::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%; /* Altura del sobreado, ajusta según tus necesidades */
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
    }
    .textSubtitleNoti{
        /* color:#E2E2E2; */
        color:#ACA8B8;
    }
    .iconPlusNoti{
        font-size: 26px;
        /* background: #ACA8B8; */
        color: #7DCEA0;
    }
    .textDateNoti{
        /* color:#D5D5D5; */
    }
    .textTitleSlay{
            font-weight: 600;
        }
        .textPlusNotiSlay{
            /* font-size:20px; */
            /* width: 400px; */
            font-weight: 500;
        }

        /* lo mas visto */
        .hrVistoNoti{
 background: #28B463;
 /* color: #474B81; */
 /* height: 4px; */
 /* color: none; */
 /* padding-top: 90px; */
 /* padding: 90px; */
}
.containerVistoNoti{
    /* background: #7DCEA0; */
    /* display: flex; */
    /* position: relative; */
    position: absolute;
    margin-bottom: 50px;
    margin-top:-70rem;
    /* margin-right: -200px; */
    margin-left: 100rem;
    width:280px;
}
.imgVistoNoti{
    width:100px;
    /* height:100px; */
    background: #ACA8B8;
}
.textVistoNoti{
 font-size:15px;
}
.textDateVistoNoti{
    font-size:12px;
    font-weight: 400;
}
.textTitleVistoNoti{
    /* position: absolute;
    margin-top: 90px; */
}
    </style>


