<template>
<!-- <a href="#loginAdmin" data-bs-toggle="modal"> admin</a> -->
<!-- <a href="#loginAdmina" data-bs-toggle="modal"> admin</a> -->

<!-- <div class="modal fade modal-destino" id="loginAdmina" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1"> -->
    <!-- <div class="modal- fade- modal-destino-s">
    <div class="modal-dialog modal-dialog-centered modal--frm--adminLog ">
        <div class="modal-content ">
            <form class="shadow  form--frm--adminLog col-md-12 col-12 p-4 rounded-3" id="formLoginAdmin" action=""
                method="POST">
                <h2 class="fw-normal text-center mb-4">Iniciar Sesion</h2>
                <div class="mb-3">
                    <input type="email" class="form-control input--frm--adminLog" id="emailLoginAdmin" name="email"
                        placeholder="Tu correo electronico " required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input--frm--adminLog" id="passwordLoginAdmin"
                        name="password" placeholder="Ingresa la contraseña" required />
                    <img src="storage/img/icons/eye-slash-fill.svg" class="frm--loginUser--img"
                        id="imgPassLoginAdmin" onclick="mostrarC()" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-center pt-3">
                    <button type="submit" class="btn col-12 btn-primary" @click="mostrar()">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<div>
    <h1>dfs</h1>
</div>

<!-- <input type="button" onclick="mostrar()" value="click"> -->
<!-- <input type="button" @click="mostrar()" value="click"> -->

</template>

<script>
// import msgComponets from "storagepublic/js/msj.js";
// import msgComponets from "../../../public/js/home/viewPassword";
// import msgComponets from "../../js/msj";
export default {
data(){
    return{
        image:null
    };
},
// components:{
//     msgComponets
// },
methods: {
    mostrar(){
        console.log("hola");
        // login admin
        const formLoginAdmin=document.getElementById('formLoginAdmin');
        // formLoginAdmin.addEventListener('submit',(e)=>{
        // formLoginAdmin.addEventListener('submit',function(e){
                // e.preventDefault();
                const emailAdmin=document.getElementById('emailLoginAdmin');
                const passwordAdmin=document.getElementById('passwordLoginAdmin');
                fetch('/login-admin/'+emailAdmin.value+'/'+passwordAdmin.value+'').then(data =>data.json()).
                then(function(data){
                    console.log(data);
                    if (data.status==200) {
                        // msjOk();
                        // location.href='/Admin';
                        // location.href='/admin/home';
                        console.log("ok");
                    } else {
                // msjError();
                console.log('error');
                }
            });
        // });
    }
}
}
console.log("hi");
// Swal.fire(
//   'Good job!',
//   'You clicked the button!',
//   'success'
// )
// ../../../public/js/viewPassword
</script>

<style>

</style>