@extends('layouts.app')
@section('content')
<section class="breadcrumb_area">
    <img class="breadcrumb_shap" src="" alt="">
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">
                {{$title}}
            </h1>
        </div>
    </div>
</section>

<section class="content-wrapper">
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('home')}}" class="btn btn-success">
                   << Ir a lista
                </a>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h4>Datos de remate</h4>
                    </div>
                <div class="card-body p-0">
                    <div class="container pt-3">
                        <form action="{{route('guardar-edicion',$remate->id)}}" method="post" enctype="multipart/form-data">
                          @csrf
                        <div class="row">
                        <div class="form-group col-lg-8 col-sm-12">
                          <label for="titulo">Título</label>
                          <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo')? old(titulo) :$remate->titulo }}">
                          @error('titulo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                    
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="fecha">Fecha de remate</label>
                          <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha')? old(fecha) :$remate->fecha }}">
                          @error('fecha')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                       
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="hora">Hora de remate</label>
                          <input type="text" name="hora" id="hora" class="form-control @error('hora') is-invalid @enderror" value="{{ old('hora')? old(hora) :$remate->hora }}">
                          @error('hora')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                     
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="organiza">¿Quien organiza?</label>
                          <input type="text" name="organiza" id="organiza" class="form-control @error('organiza') is-invalid @enderror" value="{{ old('organiza')? old(organiza) :$remate->organiza }}">
                          @error('organiza')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                       
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="streaming">Enlace de Streaming</label>
                          <input type="string" name="streaming" id="streaming" class="form-control @error('streaming') is-invalid @enderror" value="{{ old('streaming')? old(streaming) :$remate->streaming }}">
                          @error('streaming')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                    
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="email">Correo electrónico</label>
                          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')? old(email) :$remate->email }}">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                      
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#edit-imagen">
                                Cambiar imagen
                            </button>
                            <button type="button" class="btn btn-warning float-left ml-3" data-toggle="modal" data-target="#edit-file">
                                Cambiar pdf
                            </button>
                            <button type="button" class="btn btn-danger float-right ml-3">
                            <i class="fas fa-times"></i>  Cancelar
                            </button>
                            <button type="submit" class="btn btn-success float-right">
                            <i class="fas fa-save"></i>  Guardar
                            </button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>         
</section>

<div id="edit-imagen" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <form action="{{route('cambiar-imagen',$remate->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <img class="img-fluid" src="/imagenes/remate/{{$remate->imagen}}">
                        <label for="imagen">Imagen de remate</label>
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                        <button type="submit" class="btn btn-sm btn-success">Actualizar</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

<div id="edit-file" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <form action="{{route('cambiar-archivo',$remate->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="archivo">Imagen de remate</label>
                        <input id="archivo" class="form-control-file" type="file" name="archivo">
                        <button type="submit" class="btn btn-sm btn-success">Actualizar</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.particals.footer')
@endsection