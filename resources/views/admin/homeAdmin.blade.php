{{-- <!DOCTYPE html>
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

    <title>Document</title>
</head>
<body>
      <!-- @extends('adminlte::page') 

<!-- @section('title', 'Dashboard') -->

<!-- @section('content_header') -->
<h1>Panel de control</h1>
<!-- @stop -->

<!-- @section('content') -->
    <p>Esto es el panel de administrador.</p>

<div id="homeAdmin"></div>

    
</body>
    
</head> --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de control</h1>
@stop

@section('content')
    <p>Esto es el panel de administrador.</p>

    <div class="row">

        <div class="col-md-3 col-sm-6 col-12 ">
            {{-- <a href="{{ route('list.admin.list') }}"> --}}
                {{-- < href="http://"> --}}
                <div class="info-box bg-teal">
                    <span class="info-box-icon"><i class="bi bi-images"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text-">Agregar nuevos productos</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            Agrupec
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            {{-- <a href="{{ route('list.admin.catalogo') }}"> --}}
                {{--  <a href="{{route('form.admin.catalogo')}}">  --}}
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="bi bi-file-medical-fill"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text-">Agregar nuevos catalogos</span>
                        <span class="info-box-number">41,410</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            Agrupec
                        </span>
                    </div>
                </div>
            </a>
        </div>


        {{-- <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        Agrupec
                    </span>
                </div>

            </div>

        </div> --}}



    </div>

    {{--    --}}

    {{-- <h5 class="mb-2 mt-4">Funciones desactivadas</h5> --}}
    <div class="row">
        {{-- <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">

                <div class="overlay">
                    <i class="fas fa-3x fa-sync-alt"></i>
                </div>

                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">

                <div class="overlay dark">
                    <i class="fas fa-3x fa-sync-alt"></i>
                </div>

                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div> --}}

    </div>

@stop



{{-- @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop --}}
