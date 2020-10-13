@extends('layouts.app')
@section('content')
<<<<<<< HEAD
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
=======
<section class="event_banner_area">
    <div class="parallax-effect" style="background: url({{asset('theme/img/1-portadas/3.png')}});"></div>
    <div class="container">
        
    </div>
</section>

<section class="more_feature_area mb_40">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_item mb-30">
                    <div class="blog_img">
                        <img src="{{url('theme/img/blog-grid/blog-grid1.jpg')}}" alt="">
                    </div>
                    <div class="blog_content">
                        <a href="#">
                            <h5 class="f_p f_size_20 f_500 t_color mb_20">Nuestra historia
                            </h5>
                        </a>
                        <p class="f_400 mb-0">Desde el año 1943 dedicados a la producción agropecuaria.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_item mb-30">
                    <div class="blog_img">
                        <img src="{{url('theme/img/blog-grid/blog-grid2.jpg')}}" alt="">
                    </div>
                    <div class="blog_content">
                        <a href="#">
                            <h5 class="f_p f_size_20 f_500 t_color mb_20">Fotos & Videos
                            </h5>
                        </a>
                        <p class="f_400 mb-0">Un poco de nosotros y lo que hacemos cada día.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_item mb-30">
                    <div class="blog_img">
                        <img src="{{url('theme/img/blog-grid/blog-grid3.jpg')}}" alt="">
                    </div>
                    <div class="blog_content">
                        <a href="#">
                            <h5 class="f_p f_size_20 f_500 t_color mb_20">Premios y exposiciones</h5>
                        </a>
                        <p class="f_400 mb-0">Algunos de los premios que obtuvimos.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="historia-tab" data-toggle="tab" href="#historia" role="tab" aria-controls="historia" aria-selected="true"><i class="ti-info"></i> Nuestra historia</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="fotos-tab" data-toggle="tab" href="#fotos" role="tab" aria-controls="fotos" aria-selected="false"><i class="ti-download"></i> Fotos & Videos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="premios-tab" data-toggle="tab" href="#premios" role="tab" aria-controls="premios" aria-selected="false"><i class="ti-clipboard"></i> Premios</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="historia" role="tabpanel" aria-labelledby="historia-tab">
                <br>
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Nuestra historia</h3></div>
                    <div class="card-body">
                        <div class="features_info">
                            <img class="dot_img" src="img/process/divider.png" alt="">
                            <div class="row agency_featured_item mt-0 flex-row-reverse">
                                <div class="col-md-6">
                                    <div class="agency_featured_img text-right">
                                        <img src="{{asset('theme/img/7-historia/1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="agency_featured_content pr_70 pl_70">
                                        <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                        <h2>1943</h2>
                                        <h3>La Asunción comenzó su actividad ganadera</h3>
                                        <p>En sus orígenes, La Asunción se encontraba poblado por vientres de la raza criolla, en alguna manera mestizadas con toros Angus. Con la llegada de la raza Cebú, se incorporan toros Santa Gertrudis, Brangus y posteriormente Nelore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row agency_featured_item agency_featured_item_two">
                                <div class="col-md-6">
                                    <div class="agency_featured_img text-right">
                                        <img src="{{asset('theme/img/7-historia/2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="agency_featured_content pl_100">
                                        <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                        <h2>1960</h2>
                                        <h3>La Asunción se inicia como cabaña</h3>
                                        <p>con planteles de la raza Nelore, Santa Gertrudis y Brangus, concurriendo a las Exposiciones del NOA (Tucumán, Salta y Jujuy) y del NEA (Resistencia), en las cuales obtiene importantes premios.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row agency_featured_item flex-row-reverse">
                                <div class="col-md-6">
                                    <div class="agency_featured_img text-right">
                                        <img src="{{asset('theme/img/7-historia/3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="agency_featured_content pr_70 pl_70">
                                        <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                        <h2>1989</h2>
                                        <h3>La Asunción incorpora la raza Brahman</h3>
                                        <p>Y decide absorber todos los planteles Nelore y Brahman con Hereford, a los efectos de producir únicamente Braford, lo que hace ininterrumpida y exclusivamente desde esa fecha.</p>
                                    </div>
>>>>>>> 020665f59de3dc91e26eac3579f51c70cab22ce7
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </section>    

   @include('layouts.particals.footer')
=======
            <div class="tab-pane fade" id="fotos" role="tabpanel" aria-labelledby="fotos-tab">
                <br>
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Fotos & Videos</h3></div>
                    <div class="card-body">
                        FTOSO Y VIDEOS
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="premios" role="tabpanel" aria-labelledby="premios-tab">
                <br>
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Algunos premios</h3></div>
                    <div class="card-body">
                        FTOSO Y VIDEOS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

@include('layouts.particals.footer')
>>>>>>> 020665f59de3dc91e26eac3579f51c70cab22ce7
 @endsection