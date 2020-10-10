@extends('layouts.app')
@section('content')
    <section class="breadcrumb_area">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">{{$title}}</h1>
            </div>
        </div>
    </section>

<section class="contact_info_area sec_pad bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-0">
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Dirección</h6>
                        <p class="f_400 f_size_15">Melbourne’s GPO 434 Bourke St. Dhaka VIC 3074, Australia</p>
                    </div>
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Información de contacto</h6>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Telefono:</span> <a href="tel:3024437488">(+096) 302 443 7488</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Wsp:</span> <a href="tel:3024437488">(+096) 302 443 7488</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Fax:</span> <a href="tel:3024437488">(+096) 204 353 6684</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Correo electrónico:</span> 
                            <a href="mailto:saasland@gmail.com">
                                saasland@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact_form">
                        <form action="{{route('mensaje-contacto')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                    <input type="text" name="nombres" placeholder="Nombre y Apellido..." class="form-control  @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>
                                    @error('nombres')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                          
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                    <input type="text" name="email" placeholder="Correo electrónico..." class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                              
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                    <input type="text" name="asunto" placeholder="Asunto de mensaje..." class="form-control  @error('asunto') is-invalid @enderror" value="{{ old('asunto') }}" required autocomplete="asunto" autofocus>
                                    @error('asunto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                    <textarea name="mensaje" cols="30" rows="10" placeholder="Escribenos tu mensaje" class="form-control  @error('mensaje') is-invalid @enderror" value="{{ old('mensaje') }}" required autocomplete="mensaje" autofocus></textarea>
                                    @error('mensaje')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                          
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn_three">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>            

    @include('layouts.particals.footer')
@endsection