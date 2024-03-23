<template>
<div class="container shadow mb-3 p-4">
    <h1>Noticias Recientes</h1>
    <div class="d-flex justify-content-between">
        <h6 class="textSubtitleNoti">LAS ÚLTIMAS NOTICIAS DEL MUNDO</h6>
        <!-- <hr class="customHr">  -->
        <a href="" class="btnPlusNoti">
            <span class="d-flex justify-content-end bg-success- textPlusNoti"><i class="bi bi-plus-square-fill me-2 iconPlusNoti d-flex justify-content-center"></i>Más Noticias</span>
        </a>
    </div>
<hr>
    <div class="row cols-row-md-2-">
        <div class="col-3- bg-success- colUpdateNoti shadow g-2 mb-3 me-3">
         <div class="card cardImgNoti">
            <div class="titleNoti p-3">
             <button class="col-4 col btnInfoNewNoti">infoNew</button>
                <h5>Nuevo soundtrack de hiruyuki sawano 2023</h5>
                <div class="dateNoti">
                    <h6 class="textDateNoti"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                </div>
            </div>
         </div>
        </div>
        <div class="col-3- bg-success- colUpdateNoti shadow g-2 mb-3">
         <div class="card cardImgNoti">
            <div class="titleNoti p-3">
             <button class="col-4 col btnInfoNewNoti">infoNew</button>
                <h5>Nuevo soundtrack de hiruyuki sawano 2023</h5>
                <div class="dateNoti">
                    <h6 class="textDateNoti"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                </div>
            </div>
         </div>
        </div>
        <!-- <div class="col-3- bg-success colUpdateNoti shadow g-2 mb-3">
         <div class="card cardImgNoti">
            <div class="titleNoti p-3">
             <button class="col-4 col btnInfoNewNoti">infoNew</button>
                <h5>Nuevo soundtrack de hiruyuki sawano 2023</h5>
                <div class="dateNoti">
                    <h6 class="textDateNoti"><i class="bi bi-clock"></i> 23 julio, 2023</h6>
                </div>
            </div>
         </div>
        </div> -->

        <!-- <div class="mi-div card col-2">
            dass
            dfa

        </div> -->
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style>
  /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap'); */

  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,100&display=swap');
  /* font-family: 'Roboto', sans-serif; */
.textPlusNoti{
    /* font-size:20px; */
    /* width: 400px; */
    font-weight: 500;
}
.colUpdateNoti{
    /* background:red; */
    padding: 10px;
    width:340px;
    /* margin-left:20px; */
    /* Aplicar márgenes en direcciones específicas (arriba, derecha, abajo, izquierda) */
    /* margin-top: 10px;
    margin-right: 20px;
    
  margin-bottom: 10px; */
  /* margin-left: 20px; */
    
}
.btnPlusNoti{
    text-decoration: none;
  
}
.customHr {
    width: 100%;
    height: 1px;
    background-color: black;
    border: none;
    position: absolute;
    bottom: 50%;
    left: 0;
    transform: translateY(90%);
}

.cardImgNoti{
    /* font-family: 'Roboto', sans-serif; */
    font-family: 'Roboto', sans-serif;
    position:relative;
    height: 260px;
    width: 320px;
     /* background:red; */
 background-image: url("/storage/3973659-2715822_1200x1200.webp");
 background-size: cover; 
 transition: background 0.6s ease;
 opacity: 0.9;
    }
.textDateNoti{
    /* color:#D5D5D5; */
}
/* .cardImgNoti:after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
    background-clip: padding-box;
} */
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



 .titleNoti{
    color:white;
    /* padding: ; */
    margin-top: 124px;
    /* background: red; */
 }
 .btnInfoNewNoti{
    background: white;
    border: none;
    border-radius:5px;
 }
 .btnInfoNewNoti:hover{
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
</style>