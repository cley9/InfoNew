<template>
  <!-- @extends('adminlte::page') -->

<!-- @section('title', 'Dashboard') -->

<!-- @section('content_header') -->
    <h1>Panel de control</h1>
<!-- @stop -->

<!-- @section('content') -->
    <p>Esto es el panel de administrador.</p>

    <div class="row">

        <div class="col-md-3 col-sm-6 col-12 ">
            <a href="{{ route('list.admin.list') }}">
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
            <!-- <a href="{{ route('list.admin.catalogo') }}"> -->
                <!-- {{--  <a href="{{route('form.admin.catalogo')}}">  --}} -->
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
            <!-- </a> -->
        </div>




    </div>

    
    <div class="row">
    </div>

<!-- @stop -->

</template>

<script>
export default {

}
</script>

<style>

</style>