@extends('layouts.app')
@section('content')
    <section class="breadcrumb_area">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$title}}</h1>
            </div>
        </div>
    </section>

    <section class="more_feature_area mb_40">
        <div class="container">

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
                                @if (!$remate->image)
                                <img class="img-fluid" src="/imagenes/remate/{{$remate->imagen}}">
                                @else
                                <img class="img-fluid" src="{{asset('theme/img/2-imagenes/2.png')}}">
                                @endif
                            </div>
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
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Por informes y consultas:</strong> <br>
                                        (0381) 421-5400 <br>
                                        laasuncioncabana@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <h4 class="mb-30">Nuestro próximo remate</h4>

                            <div class="card mb-0">
                                <div class="card-header">
                                    {{ $remate->titulo }}
                                </div>
                                <div class="card-body"> 
                                    <div class="table-responsive">
                                        <table class="table">
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
                           
                            {{--  TABS                              --}}

                        </div>
                    </div>
                </div>

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

    @include('layouts.particals.footer')
@endsection