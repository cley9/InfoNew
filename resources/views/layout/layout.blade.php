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
    {{-- @vite("resources/js/app.js") --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navDising mb-4 ">
        <div class="container-fluid ">
          <a class="navbar-brand text-nav " href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto- ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                
                <a class="nav-link active text-color-primary text-nav" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link text-nav" href="{{ route("versus.main.home") }}">versus</a> --}}
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link text-nav" href="#"><input type="button" class="btn-login" value="login"></a> --}}
                {{-- <button class="nav-link text-nav btn-login-" data-modal-toggle="authentication-modal">login</button> --}}
                {{-- <a href="#loginUserInicio" class="nav-link text-nav btn-login-" data-bs-toggle="modal"> login</a>             --}}
              </li>

    <li class="nav-item"><a href="#jose"  class="nav-link text-nav btn-login- btn bg-warning " role="button"
    id="dropdownMenuLink" data-bs-toggle="modal"><i
        class="bi bi-person-fill me-lg-2"></i>Iniciar sesión as</a></li>





              <li class="nav-item dropdown">
                <a class="nav-link text-nav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
    </nav>

 {{-- <a href="#loginUserInicio" data-bs-toggle="modal">cley</a> --}}

{{-- modal para el logueo del usuario --}}
    <div class="cl" id="loginUser"></div>
    @yield('body')
    <br><br><br><br><br>
    <footer class="pt-4   footerDising">
        <div class="container text-muted mb-4">
            <div class="row ">
                <div class="container  d-flex align-items-center justify-content-center pt-4">
                    <div class="col-12 mb-4 row  ">
                        <div class="col-lg-6 d-flex mb-4 align-items-center justify-content-between">
                            <h5 class="btn--footer--rese text-center me-lg-4"> <img
                                    src="{{ asset('storage/img/icons/peru.png') }}" class="me-2" width="26px"
                                    alt=""> Perú</h5>
                            <h5 class="btn--footer--rese text-center  me-lg-4">Nuevo Productos</h5>
                            {{--  <h5 class="btn--footer--rese text-center  me-lg-4 ">Regiones</h5>  --}}
                        </div>

                        <div class="col-lg-6 col-12 d-flex justify-content-lg-end">
                            <div class=" text-center">

                                <a href="https://www.instagram.com/?hl=es" class="rounded-circle btn   icons--Contact"
                                    target="_blank"><i class="bi bi-instagram"></i></a>
                                <a href="https://web.facebook.com/?_rdc=1&_rdr"
                                    class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://github.com/kevinPumaille/DeliveryRestaurante"
                                    class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-github"></i></a>
                                <a href="https://twitter.com/iniciarsesion?lang=es"
                                    class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-twitter"></i> </a>
                                {{--  <a href="https://api.whatsapp.com/send?phone= + 51 {{config('constants.numContact')}}" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-whatsapp"></i></a>  --}}
                                <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-youtube"></i> </a>
                                <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-twitch"></i> </a>
                                <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-messenger"></i> </a>
                                <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-pinterest"></i> </a>
                                <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i
                                        class="bi bi-linkedin"></i> </a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3 box--layout-footer">
                    <h4 class="fw-normal "> Suscríbete </h4>
                    <h5 class="fw-normal mb-4"> Te enviaremos las mejores ofertas de todo los productos y más.</h5>

                    <form action="" class="text-center mb-4- mb-md-4 frm--correo">
                        <input type="email" class="input--frm--sub mb-3 me-lg-4" placeholder="Correo electronico"
                            required />
                        <input type="text" class="input--frm--sub mb-4 me-lg-3" placeholder="Nombre" required />
                        <input type="submit" class="btn--frm--sub" value="Suscrìbete">
                    </form>

                </div>
                <div class="col-4 col-md-3  ">
                    <h5 class="text-light">Nosotros</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="Nosotros" class="text-muted" href="#">Nosotros</a></li>
                        <li><a href="contactenos" class="text-muted  " href="#">Contáctanos</a></li>
                        <li><a href="Nosotros" class="text-muted" href="#">Ubícanos</a></li>
                    </ul>

                </div>

                <div class="col-4 col-md ">
                    <h5 class="text-light">Marcas</h5>
                    <ul class="list-unstyled text-small">
                        <h5 class="text-muted h6">Pavco</h5>
                        <h5 class="text-muted h6">Matusita</h5>
                        <h5 class="text-muted h6">Nicolle</h5>
                        <h5 class="text-muted h6">Nipon Plas</h5>

                    </ul>
                </div>

                <div class="col-3 col-md  ">
                    <h5 class="text-light">Marcas</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="Nosotros" class="text-muted" href="#">Nosotros</a></li>
                        <li><a href="help" class="text-muted" href="#">Ayuda</a></li>
                    </ul>
                </div>
                <hr class=" d-block d-sm-block d-md-none ">
            </div>
        </div>
        <div class=" footer--final mb-3 d-flex justify-content-center align-items-center">
            <div class="text-center ">
                <small class=" mb-3 text-muted h6"> ©2022 copyright ecomerce-accesibilidad </small>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/msj.js') }}"></script>
    <script src="{{ asset('js/dataPictur.js') }}"></script>
    <script src="{{ asset('js/addCart.js') }}"></script>
    <script src="{{ asset('js/btn-msg.js') }}"></script>
    <script src="{{ asset('js/btn-up.js') }}"></script>
    <script src="{{ asset('js/home/viewPassword.js') }}"></script>
</body>
</html>