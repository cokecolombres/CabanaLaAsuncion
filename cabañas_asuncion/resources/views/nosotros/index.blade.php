@extends('layouts.app')
@section('content')
    <section class="event_banner_area">
        <div class="parallax-effect" style="background: url({{asset('theme/img/1-portadas/111.png')}});"></div>
        <div class="container">
            <div class="event_banner_content">
                <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                <h6 class="wow fadeInUp" data-wow-delay="0.6s">Noviembre 14, 2020 - 15 hs</h6>
                <h2 class="wow fadeInUp" data-wow-delay="0.8s"><span>Próximo </span> <br> Remate Anual</h2>
                <a class="event_btn btn_hover wow fadeInLeft" data-wow-delay="0.9s" href="#">Quiero saber más</a>
                <a class="event_btn event_btn_two btn_hover wow fadeInRight" data-wow-delay="0.9s" href="#"><i class="arrow_triangle-right_alt2"></i>Ver catálogo</a>
            </div>
        </div>
    </section>

<section class="saas_banner_area_two Cus_subs_el mt-50">
        <div class="section_intro">
            <div class="section_container Sass_he">
                <div class="intro Subs_ele_cus">
                    <div class=" intro_content">
                        <h1 class="f_700 f_size_50 w_color f_p sub_hecu">Subscribete a nuestras Newsletters</h1>
                        <p class="w_color f_size_18">Subscribiendote a nuestras Newsletters podras obtener información sobre nuestras cabañas, remates y todas las novedades de nuestro sitio web.</p>
                        <form action="{{route('newsletter')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="form-group text_box col-lg-6">
                                    <input type="text" placeholder="Ingrese su nombre y apellido" class=" @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>
                                    @error('nombres')
                                    <div class="alert error">
                                    <div class="alert_body">
                                        <i class="icon-close"></i>
                                        {{ $message }}
                                    </div>
                                    <div class="alert_close"><i class="icon_close"></i></div>
                                    </div>                                        
                                    @enderror                               
                                </div>
                                <div class="form-group text_box col-lg-6">
                                    <input type="email" name="email" placeholder="Ingrese su correo electrónico" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <div class="alert error">
                                    <div class="alert_body">
                                        <i class="icon-close"></i>
                                        {{ $message }}
                                    </div>
                                    <div class="alert_close"><i class="icon_close"></i></div>
                                    </div>                                        
                                    @enderror                       
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn_three">Subscribirme</button>                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    

   @include('layouts.particals.footer')
 @endsection