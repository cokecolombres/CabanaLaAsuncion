@extends('layouts.app')
@section('content')
<section class="event_banner_area">
    <div class="parallax-effect" style="background: url({{asset('theme/img/1-portadas/111.png')}});">
    </div>
    <div class="container">
        <div class="event_banner_content">
            <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
            <h6 class="wow fadeInUp" data-wow-delay="0.6s">Noviembre 14, 2020 - 15 hs</h6>
            <h2 class="wow fadeInUp" data-wow-delay="0.8s"><span>Próximo </span> <br> Remate Anual</h2>
            <a class="event_btn btn_hover wow fadeInLeft" data-wow-delay="0.9s" href="{{url('/remates#remate')}}">Más info</a>
            <a class="event_btn event_btn_two btn_hover wow fadeInRight" data-wow-delay="0.9s" href="#"><i class="arrow_triangle-right_alt2"></i>Ver catálogo</a>
        </div>
    </div>
</section>
<section class="h_security_about_area">
    <div class="container">
        <div class="row h_analytices_features_item align-items-center">
            <div class="col-lg-6">
                <div class="h_security_img text-center">
                    <img class="wow fadeInUp" src="{{url('theme/img/2-imagenes/1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h_analytices_content">
                    <h5 class="wow fadeInUp">Productores exclusivos de raza Braford</h5>
                    <h2 class="wow fadeInUp">Genética de elite</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                        Testeamos todos los semen disponibles en nuestro país y el exterior para ver la performance de cada uno.
                    </p>
                    <p>Permanentemente incorporamos genética de elite.</p>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.5s"><span>Trabajamos con inseminación artificial</span> tanto con detección de celo, como con sincronización y tiempo fijo.</li>
                        <li class="wow fadeInUp" data-wow-delay="0.7s"><span>Transplantes embrionarios (TE) </span> desde el año 2006.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row h_analytices_features_item flex-row-reverse align-items-center">
            <div class="col-lg-6">
                <div class="h_security_img text-center">
                    <img class="wow fadeInUp" src="{{url('theme/img/2-imagenes/1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h_analytices_content">
                    <div class="event_about_content">
                        <h4 class="wow fadeInUp">1943 - 2020</h4>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">77 años de historia</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">Nuestros animales se caracterizan por su rusticidad y capacidad para trabajar en cualquier campo.
                    </p>

                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.5s"><span>Flexible, fast reporting:</span> On your bike mate cobblers I don't want no agro bleeding crikey</li>
                        <li class="wow fadeInUp" data-wow-delay="0.7s"><span>Access our data anywhere: </span> James Bond Queen's English mufty it's all gone to pot bobby elizabeth.</li>
                        <li class="wow fadeInUp" data-wow-delay="0.9s"><span>Invite your entire team:</span> So I said in my flat Elizabeth no biggie me old mucker smashing starkers spiffing wind up, cobblers chip shop.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="get_started_area">
    <div class="shap one"></div>
    <div class="shap two"></div>
    <div class="shap one three"></div>
    <div class="shap two four"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="get_content">
                    <h3 class="f_400 f_p wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">Cabaña La Asunción</h3>
                    <h2 class="f_700 f_p f_size_40 l_height50 mb_20 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">77 años de historia</h2>
                    <p class="f_400 f_p mb_40 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        Ubicada en la localidad de El Jardín, Departamento La Candelaria, Provincia de Salta.
                    </p>
                    <p>
                        Nuestro establecimiento fue adquirido en el año 1943 y constituido como cabaña en el año 1972.
                    </p>
                    <p>
                        <strong>Desde 1989 dedicados a producir exclusivamente Braford.</strong>
                    </p>
                    <a class="event_btn btn_hover wow fadeInLeft" data-wow-delay="0.9s" href="{{url('/remates#remate')}}">Leer historia</a>
                </div>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
            <img src="{{url('theme/img/2-imagenes/5.png')}}" alt="">
            </div>
        </div>
    </div>
</section>




{{-- <section class="">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="event_about_img">
                    <img class="wow fadeInRight" data-wow-delay="0.2s" src="{{url('theme/img/2-imagenes/1index.png')}}" alt="">
                    <div class="about_bg"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event_about_content">
                    <h4 class="wow fadeInUp">Exclusivos de raza Braford</h4>
                    <h2 class="wow fadeInUp">Genética de elite</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        <strong>Toros con capacidad para trabajar en cualquier campo.</strong> 
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        La rusticidad de nuestros animales se logra naturalmente gracias a las condiciones ambientales que tenemos en <strong>La Asunción</strong>.
                    </p>
                    <a href="#" class="event_btn event_btn_two btn_hover wow fadeInUp" data-wow-delay="0.9s">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service_details_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service_details_img wow fadeInLeft" data-wow-delay="0.3s">
                    <img src="{{url('theme/img/breadcrumb/service_details.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service_details">
                    <div class="event_about_content">
                        <h4 class="wow fadeInUp">1943 - 2020</h4>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">77 años de historia</h2>
                    </div>
                    <p class="f_400">
                        <strong>Nos dedicamos a producir exclusivamente raza braford desde 1989.</strong> 
                    </p>
                    <p>
                        Incorporamos genética de elite permanentemente.
                    </p>
                    <p class="f_400">
                        Testeamos todos los semen disponibles en nuestro país y el exterior para ver la performance de cada uno.
                    </p>
                    
                    <p> Trabajamos con inseminación artificial y con transplantes embrionarios (TE).</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@include('layouts.particals.footer')
@endsection          
