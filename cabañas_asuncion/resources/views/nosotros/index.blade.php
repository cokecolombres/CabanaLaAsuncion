@extends('layouts.app')
@section('content')
    <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Nosotros</h1>
            </div>
        </div>
    </section>

    <section class="">
        <br>
        <div class="container">
            <p><a href="historia.html">Nuestra historia</a></p>
                <p><a href="fotos.html">Fotos</a></p>
                <p><a href="premios.html">Premios</a></p>
                <p><a href="equipo.html">Equipo</a></p>
        </div>            
    </section>
   @include('layouts.particals.footer')
 @endsection