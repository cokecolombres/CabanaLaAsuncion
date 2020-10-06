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
            <a href="{{route('nuevo-remate')}}" class="btn btn-success">
                    Crear remate >>
                </a>
                <div class="card mt-3 mb-3">
                        @if ($remates->count() == 0)
                        <div class="card-body p-0">
                            <div class="alert alert-primary mb-0" role="alert">
                               <i class="fas fa-exclamation-triangle"></i><strong>No existen remates creados actualmente.</strong>
                            </div>
                        </div>
                        @else
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap m-0">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Fecha</th>
                                        <th>Organiza</th>
                                        <th>Streaming</th>
                                        <th>Email</th>
                                        <th>Actualizado</th>
                                        <th width="10px";>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($remates as $remate)
                                    <tr>
                                        <td scope="row"> {{$remate->titulo}} </td>
                                        <td>{{ $remate->fecha }}</td>
                                        <td>{{ $remate->organiza }}</td>
                                        <td>{{ $remate->streaming }}</td>
                                        <td>{{ $remate->email }}</td>
                                        <td>{{ $remate->updated_at->diffForHumans()}}</td>
                                        <td class="text-center">
                                            <a href="{{route('mostrar-remate', $remate->id)}}" class="text-primary" >
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="text-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="text-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                </div>

            </div>
        </div>
    </div>         
</section>
@include('layouts.particals.footer')
@endsection