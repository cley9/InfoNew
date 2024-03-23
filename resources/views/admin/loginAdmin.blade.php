<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset("css/myStyle.css") }}">
    @vite("resources/js/app.js")

    <title>DocumentDS</title>
</head>
<body>
    
    {{-- <div class="modal fade modal-destino" id="loginAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" --}}
    {{-- tabindex="-1"> --}}
    <div class="modal-dialog modal-dialog-centered modal--frm--adminLog ">
        <div class="modal-content ">
            <form class="shadow  form--frm--adminLog col-md-12 col-12 p-4 rounded-3" id="formLoginAdmin" action=""
                method="POST">
                @method('GET')
                @csrf
                <h2 class="fw-normal text-center mb-4">Iniciar Sesion</h2>
                <div class="mb-3">
                    <input type="email" class="form-control input--frm--adminLog" id="emailLoginAdmin" name="email"
                    placeholder="Tu correo electronico " required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input--frm--adminLog" id="passwordLoginAdmin"
                    name="password" placeholder="Ingresa la contraseña" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img"
                    id="imgPassLoginAdmin" onclick="mostrarC()" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-center pt-3">
                    <button type="submit" class="btn col-12 btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
         console.log("hola");
        // login admin
        const formLoginAdmin=document.getElementById('formLoginAdmin');
        // formLoginAdmin.addEventListener('submit',(e)=>{
        formLoginAdmin.addEventListener('submit',function(e){
            // console.log("fa");    
            e.preventDefault();
                const emailAdmin=document.getElementById('emailLoginAdmin');
                const passwordAdmin=document.getElementById('passwordLoginAdmin');
                fetch('/login-admin/'+emailAdmin.value+'/'+passwordAdmin.value+'').then(data =>data.json()).
                then(function(data){
                    console.log(data);
                    if (data.status==200) {
                        // msjOk();
                        // location.href='/Admin';
                        location.href='/admin/home';
                        console.log("ok");
                    } else {
                // msjError();
                console.log('error');
                }
                     });
            });
    </script>
    {{-- <div id="loginAdmin"></div> --}}

{{-- </div> --}}


 
 {{-- <div class="modal fade modal-destino" id="loginAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
     --}}
    {{-- <div class="modal-dialog modal-dialog-centered modal--frm--adminLog ">
        <div class="modal-content ">
            <form class="shadow  form--frm--adminLog col-md-12 col-12 p-4 rounded-3" id="formLoginAdmin" action=""
                method="POST">
                @method('GET')
                @csrf
                <h2 class="fw-normal text-center mb-4">Iniciar Sesion</h2>
                <div class="mb-3">
                    <input type="email" class="form-control input--frm--adminLog" id="emailLoginAdmin" name="email"
                        placeholder="Tu correo electronico " required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input--frm--adminLog" id="passwordLoginAdmin"
                        name="password" placeholder="Ingresa la contraseña" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img"
                        id="imgPassLoginAdmin" onclick="mostrarC()" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-center pt-3">
                    <button type="submit" class="btn col-12 btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div> --}}
{{-- </div> --}}
<script src="{{ asset('js/btn-msg.js') }}"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>