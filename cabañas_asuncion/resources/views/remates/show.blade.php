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

      <div class="text-center pt-3">
        <a href="{{route('home')}}" class="btn btn-success">
          << Volver al listado
        </a>
        <a href="#crerlote" type="button" class="btn btn-warning" data-toggle="modal" data-target="#crear-lote">
          Crear nuevo lote
        </a>
      </div>

      <section class="blog_area_two sec_pad pt-0">
        <div class="container">
        @if ($lotes->count() == null)
          <div class="col-xl-12 col-md-12 col-sm-12 pt-2 mt-2">
            <div class="alert alert-warning text-center" role="alert">
              <h3>Aún no se han creado lotes para {{$remate->titulo}}</h3>
            </div>
          </div>
        @else              
        <div class="row">
          <div class="col-lg-12 blog_grid_info">
            <div class="row" id="blog_masonry" style="position: relative; height: 2445.69px;">
            @foreach ($lotes as $lote)
              <div class="col-sm-6 col-lg-4" style="position: absolute; left: 333px; top: 0px;">
                <div class="blog_content pb-0 pl-0">
                    <h5 class="blog_title mb-0">{{$lote->titulo}}</h5>
                    <p>{{$lote->descripcion}}</p>
                </div>                          
                <div class="blog_list_item blog_list_item_two mt-0 mb-2">
                    <div class="video_post">
                      <img class="img-fluid mh-100" style="height: 300px;" src="{{$lote->featured_imagen_url}}" alt="">
                      <a class="popup-youtube video_icon" href="{{$lote->enlace}}"><i class="arrow_triangle-right"></i></a>
                    </div>
                </div>
                <div class="blog_content pt-0 pl-0 pr-0">
                  <a href="{{route('imagenes-lote', $lote->id)}}" class="btn btn-success btn-block">
                    Agregar /Quitar imagen
                  </a>
                </div>             
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>

  <div class="modal fade" id="crear-lote" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Crear lote N° ({{$lotes->count()+1}})</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('guardar-lote', $remate->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
   
            <div class="form-group">
            <label for="titulo">Titulo de lote</label>
            <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>
            @error('titulo')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
                </span>
                @enderror         
              </div>
              
              <div class="form-group">
                <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" style="min-height: 100px; max-height: 100px" value="{{ old('descripcion') }}" autocomplete="descripcion" autofocus></textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror            
              </div>
              
            <div class="form-group">
              <label for="enlace">Coloque URL del video para insertar</label>
              <input type="text" name="enlace" id="enlace" class="form-control @error('enlace') is-invalid @enderror" value="{{ old('enlace') }}" required autocomplete="enlace" autofocus></textarea>
              @error('enlace')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror    
            </div>
          
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection