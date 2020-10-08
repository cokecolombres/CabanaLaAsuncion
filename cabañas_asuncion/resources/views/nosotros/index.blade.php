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
<section class="event_counter_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="event_text wow fadeInLeft">
                    <h3>Falta poco para nuestro <span>Remate anual</span></h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="event_countdown wow fadeInRight">
                    <div class="event_counter red-time-counter"><div class="red-countdown red-countdown-one" data-countdown="31/12/2019"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="event_about_area">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="event_about_img">
                    <img class="wow fadeInRight" data-wow-delay="0.2s" src="img/home-event/about.jpg" alt="">
                    <div class="about_bg"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event_about_content">
                    <h2 class="wow fadeInUp">Cabaña <br> La Asunción</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">So I said knees up Jeffrey grub me old mucker Oxford spend a penny, pukka codswallop fantastic lost the plot Queen's English. Daft he legged it mufty chancer porkies burke blatant pardon me lavatory.</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="event_about_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/home-event/marker.png" alt="">
                                <h6>Where</h6>
                                <p>Golly gosh the wireless posh loo smashing.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="event_about_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/home-event/timer.png" alt="">
                                <h6>When</h6>
                                <p>Sunday to Wednesday April 24 to 04, 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- <section class="">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Nuestra historia</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Premios</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Fotos & Videos</a>
                      </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <section class="process_area bg_color sec_pad">
                                <div class="container">
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
                                            </div>
                                        </div>
                                        <div class="row agency_featured_item agency_featured_item_two">
                                            <div class="col-md-6">
                                                <div class="agency_featured_img text-right">
                                                    <img src="{{asset('theme/img/7-historia/4.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="agency_featured_content pl_100">
                                                    <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                                    <h2>2003</h2>
                                                    <h3>Wuth instant data to keep everyone in the know</h3>
                                                    <p>Why I say old chap that is spiffing bodge, blag pardon me buggered mufty Oxford butty bubble and squeak wind up, brown bread the full monty bloke ruddy cras tickety-boo squiffy. Starkers dropped a clanger lurgy is cack excuse my French what a plonker blower.!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row agency_featured_item flex-row-reverse">
                                            <div class="col-md-6">
                                                <div class="agency_featured_img text-right">
                                                    <img src="{{asset('theme/img/7-historia/1.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="agency_featured_content pr_70 pl_70">
                                                    <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                                    <h2>2020</h2>
                                                    <h3>With efficiency to unlock more opportunities</h3>
                                                    <p>Why I say old chap that is spiffing bodge, blag pardon me buggered mufty Oxford butty bubble and squeak wind up, brown bread the full monty bloke ruddy cras tickety-boo squiffy. Starkers dropped a clanger lurgy is cack excuse my French what a plonker blower.!</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dot middle_dot"><span class="dot1"></span><span class="dot2"></span></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            Premios
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            Fotos & Videos
                        </div>
                       </div>   
                </div>
            </div>
        </div>         
    </section> --}}
   @include('layouts.particals.footer')
 @endsection