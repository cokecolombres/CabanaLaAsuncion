@extends('layouts.app')

@section('content')
    <section class="breadcrumb_area">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Bienvenid@ {{Auth::user()->name}}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Suscriptores</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mensajes</a>
                        <a class="nav-link" id="v-pills-remates-tab" data-toggle="pill" href="#v-pills-remates" role="tab" aria-controls="v-pills-remates" aria-selected="false">Remates</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-header">Nuevos suscriptores</div>
                                <div class="card-body" style="min-height: 300px;">
                                    <div class="alert alert-primary mb-0" role="alert">
                                        <strong>Todavía no tiene suscripciones</strong>
                                    </div>
                                    
                                    <hr>
                                    <div class="table-responsive-md">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Email</th>
                                                <th width="20px">Suscripto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Adrian Tula</td>
                                                    <td>Otto@hola.com</td>
                                                    <td>17/06/2020 16:04</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Coke Tula</td>
                                                    <td>Thornton@hola.com</td>
                                                    <td>17/06/2020 16:04</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Facundo Tula</td>
                                                    <td>the Bird@hola.com</td>
                                                    <td>17/06/2020 16:04</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-header">Nuevos mensajes</div>
                                <div class="card-body" style="min-height: 300px;">
                                    <div class="alert alert-primary mb-0" role="alert">
                                        <strong>Todavía no recibio ningún mensaje</strong>
                                    </div>

                                    <hr>

                                    <div class="table-responsive-md">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Mensaje</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Adrian</td>
                                                    <td>Otto@hola.com</td>
                                                    <td>Hola! Mi nombre es raul queria saber si hacen ventas por pre oferta. Me encantan sus animales, un saludo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Coke</td>
                                                    <td>Thornton@hola.com</td>
                                                    <td>Hola! Mi nombre es raul queria saber si hacen ventas por pre oferta. Me encantan sus animales, un saludo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Facundo</td>
                                                    <td>the Bird@hola.com</td>
                                                    <td>Hola! Mi nombre es raul queria saber si hacen ventas por pre oferta. Me encantan sus animales, un saludo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
            
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-remates" role="tabpanel" aria-labelledby="v-pills-remates-tab">
                            <div class="card">
                                <div class="card-header">
                                    Remates
                                </div>
                                <div class="card-body" style="min-height: 300px;">
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
                                                                    <td scope="row"> {{$remate->titulo}}<br>
                                                                    <a href="{{route('crear-lote', $remate->id)}}">
                                                                        <small class="pt-0 mt-0">Lote(s)</small>
                                                                    </a>
                                                                    </td>
                                                                    <td>{{ $remate->fecha }}</td>
                                                                    <td>{{ $remate->organiza }}</td>
                                                                    <td>{{ $remate->streaming }}</td>
                                                                    <td>{{ $remate->email }}</td>
                                                                    <td>{{ $remate->updated_at->diffForHumans()}}</td>
                                                                    <td class="text-center">
                                                                        <a href="#" class="text-secondary" >
                                                                            <i class="fas fa-eye pt-0 mt-0"></i>
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
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-xl-4">

            </div>
            <div class="col-xl-8">
                
            </div>
        </div>
        </div>
    </section>
@endsection
