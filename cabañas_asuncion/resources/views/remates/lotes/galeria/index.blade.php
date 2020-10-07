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
      <a href="{{route('list-remates')}}" class="btn btn-success">
        << Volver al listado
      </a>
      <a href="{{route('crear-lote', $lote->remate_id)}}" class="btn btn-warning">
        Volver a lote
      </a>
    </div>  

    <div class="container mt-2">
        <form action="{{route('guardar-imagen',$lote->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex justify-content-center text-center">
                <div class="form-group col-xl-6">
                  <label for="imagen">Cargar imagen nueva</label>
                  <input type="file" name="imagen" id="imagen" class="form-control">
                </div>
                <div class="form-group col-xl-12">
                    <button type="submit" class="btn btn-success btn-sm">
                        Guardar imagen
                    </button>
                </div>
            </div>
        </form>
    </div>


    <div class="container">    

    <div class="row portfolio_gallery ml-0 mr-0 mb-50 p-3 m-3" id="work-portfolio" style="position: relative; height: 697.218px;">
        @if ($imagenes->count() == null)
        <div class="alert alert-warning col-xl-12 mt-3 ml-0 mr-0 pr-0 pl-0" role="alert">
            <h4 class="text-center">
                Aún no agregaron imagenes a su galeria de lote.
            </h4>
        </div>   
        @else      
        @foreach ($imagenes as $imagen)
        <div class="col-lg-3 col-sm-6 portfolio_item br ux mb_50" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio_img">
                <a href="#" class="img_popup">
                    <img class="img_rounded" src="{{ $imagen->url }}" alt="">
                </a>
                <div class="portfolio-description">
                    @if ($imagen->featured)
                    <button type="button" class="btn btn-sm btn-block btn-warning mt-2" disabled>
                        <i class="fas fa-star"></i> Imagen destacada
                    </button>
                    @else
                    <a href="{{url('/mi-cuenta/remates/'.$lote->id.'/lotes/imagen/'.$imagen->id)}}" class="btn btn-success btn-sm btn-block mt-2">
                        <i class="far fa-star"></i> Imagen destacada
                    </a>
                    @endif   
                    <form action="" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="hidden" name="imagen_id" value="{{$imagen->id}}">
                    <button type="submit" class="btn btn-sm btn-block btn-danger mt-2">
                        <i class="fas fa-trash ml-2"></i> Eliminar imagen
                    </button>                    
                    </form>                 
                </div>
            </div>
        </div>    
        @endforeach
        @endif
    </div>
    
    </div>
@endsection