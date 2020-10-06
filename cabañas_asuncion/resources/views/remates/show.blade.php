@extends('layouts.app')
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$title}}</h1>
        </div>
    </div>
</section>

        <section class="more_feature_area">
            <div class="container">

                <br>
                <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#informacion" role="tab" aria-controls="home" aria-selected="true">Información y pre-ofertas</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#descargar" role="tab" aria-controls="profile" aria-selected="false">Descargar Catálogo</a>
                  </li>
                  <li class="nav-item" role="venta">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#venta" role="tab" aria-controls="contact" aria-selected="false">Catálogo</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="informacion" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="img_pad">

                                    <img class="img-fluid" src="/imagenes/remate/{{$remate->imagen}}">
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p><strong>Por informes y consultas:</strong> <br>
                                            (0381) 421-5400 <br>
                                            laasuncioncabana@gmail.com
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="card text-center">
                                  <div class="">

                                    <div class="sign_info">
                                         <div class="">
                                            <div class=" ">
                                                <h5 class="card-title">Compartí este remate</h5>
                                                <ul class="list-unstyled social_tag mb-0">
                                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                                    <li><a href="#"><i class="ti-email"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                <h4 class="mb-30">Nuestro próximo remate</h4>

                                <div class="card">
                                    <div class="card-header">
                                        40° REMATE ANUAL
                                    </div>
                                    <div class="card-body"> 
                                        <div class="table-responsive">
                                            <table class="table">
                                                  <tbody>
                                                    <tr>
                                                      <th scope="row">Fecha</th>
                                                      <td>Viernes 07 de Agosto</td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Hora</th>
                                                      <td>14 hs</td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Organiza</th>
                                                      <td colspan="2">Cabaña La Asunción</td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Streaming por</th>
                                                      <td colspan="2"><a href="">elrural.com</a>, <a href="">elrural.com</a>, <a href="">elrural.com</a></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Email</th>
                                                      <td colspan="2">Larry the Bird</td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="row">Última actualización</th>
                                                      <td colspan="2">Larry the Bird</td>
                                                    </tr>
                                                  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              
                                <br>

                                <iframe class="embed-responsive" height="444" src="https://www.youtube.com/embed/pYDzqXAsCFM?list=PLq5CSGCGsUAlZgDbu5t77V_Shzjg1KXtj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="descargar" role="tabpanel" aria-labelledby="profile-tab">
                        HOLA2
                    </div>
                    <div class="tab-pane fade" id="venta" role="tabpanel" aria-labelledby="contact-tab">
                        HOLA3
                    </div>
                </div>
            </div>
        </section>
@endsection