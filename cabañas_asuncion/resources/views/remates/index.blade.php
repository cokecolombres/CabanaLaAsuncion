@extends('layouts.app')
@section('content')
    <section class="event_banner_area">
        <div class="parallax-effect" style="background: url({{asset('theme/img/1-portadas/111.png')}});">
        </div>
        <div class="container">
            <div class="event_banner_content">
                <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                <h6 class="wow fadeInUp" data-wow-delay="0.6s">{{ $remate->fecha }} - {{ $remate->hora }}</h6>
                <h2 class="wow fadeInUp" data-wow-delay="0.8s"><span>Próximo </span> <br> Remate Anual</h2>
            </div>
        </div>
    </section>

    <section class="blog_area sec_pad" id="remate">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog_sidebar_left">
                    <div class="blog_single">
                        
                        <div class="blog_content">  
                            
                            <div class="card-body">
                                <h1 class="f_p f_500 t_color mb-30 card-title">Nuestro próximo remate</h1>
                                <h2 class="f_p f_500">{{ $remate->titulo }}</h2>

<<<<<<< HEAD
            <br>
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#informacion" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-info-circle"></i> Información y pre-ofertas</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#descargar" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-download"></i> Ver y Descargar catálogo</a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="informacion" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="img_pad">
=======
                                {{-- <img class="img-fluid" src="{{url('theme/img/blog-grid/blog_single.png')}}" alt=""> --}}
>>>>>>> 020665f59de3dc91e26eac3579f51c70cab22ce7
                                @if (!$remate->image)
                                    <img class="img-fluid" style="max-height: 300px; width: 100%" src="/imagenes/remate/{{$remate->imagen}}">
                                @else
                                    <img class="img-fluid" src="{{asset('theme/img/2-imagenes/2.png')}}">
                                @endif
                                
                                <div class="table-responsive">
                                    <table class="table bg-gray">
                                        <tbody>
                                            <tr>
                                            <th scope="row">Fecha</th>
                                            <td>{{ $remate->fecha }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Hora</th>
                                            <td>{{ $remate->hora }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Organiza</th>
                                            <td colspan="2">{{ $remate->organiza }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Streaming por</th>
                                            <td colspan="2"><a href="{{ $remate->streaming }}" target="_blank">{{ $remate->streaming }}</a></td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Email</th>
                                            <td colspan="2">{{ $remate->email }}</td>
                                            </tr>
                                            @if ($remate->updated_at != $remate->created_at)
                                            <tr>
                                                <th scope="row">Última actualización</th>
                                                <td colspan="2">{{ $remate->updated_at }}</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <br>
                                <h2>Lotes inscriptos</h2>
                                <hr> 
                                
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="lote1-tab" data-toggle="tab" href="#lote1" role="tab" aria-controls="home" aria-selected="true">Lote 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lote2-tab" data-toggle="tab" href="#lote2" role="tab" aria-controls="profile" aria-selected="false">Lote 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lote3-tab" data-toggle="tab" href="#lote3" role="tab" aria-controls="contact" aria-selected="false">Lote 3</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="lote1" role="tabpanel" aria-labelledby="lote1-tab">
                                        <h4 class="mt_30 mb_10">
                                            Lote 1
                                        </h4>
                                        <iframe class="embed-responsive" height="420" src="https://www.youtube.com/embed/pYDzqXAsCFM?list=PLq5CSGCGsUAlZgDbu5t77V_Shzjg1KXtj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="tab-pane fade" id="lote2" role="tabpanel" aria-labelledby="lote2-tab">
                                        <h4 class="mt_30 mb_10">
                                            Lote 2
                                        </h4>
                                        <iframe class="embed-responsive" height="420" src="https://www.youtube.com/embed/pYDzqXAsCFM?list=PLq5CSGCGsUAlZgDbu5t77V_Shzjg1KXtj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="tab-pane fade" id="lote3" role="tabpanel" aria-labelledby="lote3-tab">
                                        <h4 class="mt_30 mb_10">
                                            Lote 3
                                        </h4>
                                        <iframe class="embed-responsive" height="420" src="https://www.youtube.com/embed/pYDzqXAsCFM?list=PLq5CSGCGsUAlZgDbu5t77V_Shzjg1KXtj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div> --}}
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Por informes y consultas:</strong> <br>
                                    (0381) 421-5400 <br>
                                    laasuncioncabana@gmail.com
                                </p>
                            </div>
                        </div>

<<<<<<< HEAD
                            <div class="card mb-0">
                                <div class="card-header">
                                    {{ $remate->titulo }}
                                </div>
                                <div class="card-body p-0"> 
                                    <div class="table-responsive p-0">
                                        <table class="table p-0">
                                            <tbody>
                                                <tr>
                                                <th scope="row">Fecha</th>
                                                <td>{{ $remate->fecha }}</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Hora</th>
                                                <td>{{ $remate->hora }}</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Organiza</th>
                                                <td colspan="2">{{ $remate->organiza }}</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Streaming por</th>
                                                <td colspan="2"><a href="{{ $remate->streaming }}" target="_blank">{{ $remate->streaming }}</a></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Email</th>
                                                <td colspan="2">{{ $remate->email }}</td>
                                                </tr>
                                                @if ($remate->updated_at != $remate->created_at)
                                                <tr>
                                                    <th scope="row">Última actualización</th>
                                                    <td colspan="2">{{ $remate->updated_at }}</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        
                            <br>
                            {{--  TABS                              --}}
                            <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach ($remate->lotes as $key => $lote)
                                   <a class="nav-link {{ $key==0 ? 'active' : ''}}" data-toggle="tab" href="#nav-{{$lote->id}}" role="tab" aria-controls="nav-{{$lote->id}}" aria-selected="true">{{$lote->titulo}}</a>
                                @endforeach
                            </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                @foreach ($remate->lotes as $key => $lote)
                                  <div class="tab-pane fade show {{ $key==0 ? 'active' : ''}}" id="nav-{{$lote->id}}" role="tabpanel" aria-labelledby="nav-{{$lote->id}}">
                                    <h4>{{ $lote->descripcion }}  </h4>
                                    <div class="row">
                                    <div class="blog_list_item blog_list_item_two col-8">
                                        <div class="video_post">
                                            <img class="img-fluid" src="{{$lote->featured_imagen_url}}" alt="">
                                            <a class="popup-youtube video_icon" href="{{$lote->enlace}}">
                                                <i class="arrow_triangle-right"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </div>  
                                    <h4>Galería de imagenes</h4>
                                    <div class="row portfolio_gallery mb-50">
                                    @foreach ($lote->imagenes as $imagen)
                                    <div class="col-lg-3 col-sm-6 portfolio_item br ux mb_50">
                                        <div class="portfolio_img">
                                            <a href="{{ $imagen->url }}" class="img_popup">
                                                <img class="img_rounded" src="{{ $imagen->url }}" alt="min-width:170px;max-width:170px;width:170px;min-height:133px;height:133px;max-height:133px;"></a>
                                        </div>
                                            {{--  <a href="{{ $imagen->url }}" class="img_popup">
                                                <img class="img_rounded" src="{{ $imagen->url }}" style="width:250px;height:250px;">
                                            </a>  --}}
                                    </div>                              
                                    @endforeach
                                    </div>                                                                    
                                </div>
                                @endforeach
                            </div>
                            {{--  TABS                              --}}

=======
                        <br>
                        <div class="card text-center">
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
>>>>>>> 020665f59de3dc91e26eac3579f51c70cab22ce7
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                <div class="tab-pane fade" id="descargar" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="pdf mt-3">
                        @if ($remate->file)
                        <h4 class="mb-30">Nuestro catálogo</h4>
                        <iframe width="100%" height="800px" src="/file/remate/{{$remate->file}}" frameborder="0"></iframe>
                        @else
                            <div class="alert alert-warning" role="alert">
                                No se encontro archivo PDF
                            </div>                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>  

=======
            </div>
        </div>
    </section>

    <section class="saas_home_area">
        <div class="banner_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="f_size_18 l_height30 wow fadeInUp" data-wow-delay="0.5s">Dejános tu email, <br> te mantenemos al tanto de próximos remates.
                        <form class="mailchimp wow fadeInUp" data-wow-delay="0.7s" method="post">
                            <div class="input-group subcribes">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email..">
                                <button class="btn btn_submit f_size_15 f_500" type="submit">Enviar</button>
                            </div>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
>>>>>>> 020665f59de3dc91e26eac3579f51c70cab22ce7

    @include('layouts.particals.footer')
@endsection