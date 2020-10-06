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

<section class="content-wrapper">
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('list-remates')}}" class="btn btn-success">
                   << Ir a lista
                </a>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        <h4>Datos de remate</h4>
                    </div>
                <div class="card-body p-0">
                    <div class="container pt-3">
                        <form action="{{route('guardar-remate')}}" method="post" enctype="multipart/form-data">
                          @csrf
                        <div class="row">
                        <div class="form-group col-lg-8 col-sm-12">
                          <label for="titulo">Título</label>
                          <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="fecha">Fecha de remate</label>
                          <input type="date" name="fecha" id="fecha" class="form-control">
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="organiza">¿Quien organiza?</label>
                          <input type="text" name="organiza" id="organiza" class="form-control">
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="streaming">Enlace de Streaming</label>
                          <input type="url" name="streaming" id="streaming" class="form-control">
                        </div>
                        <div class="form-group col-lg-4 col-sm-12">
                          <label for="email">Correo electrónico</label>
                          <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="imagen">Imágen referencia</label>
                          <input type="file" class="form-control-file" name="imagen" id="imagen">
                        </div>
                        <div class="form-group col-lg-6">
                          <label for="file">Archivo Pdf</label>
                          <input type="file" class="form-control-file" name="file" id="file">
                        </div>
                        <div class="form-group col-lg-12">
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
@include('layouts.particals.footer')
@endsection