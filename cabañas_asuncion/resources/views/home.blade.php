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
    <div class="row justify-content-center">
        <div class="col-xl-4">

        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">Nuevos suscriptores</div>
                <div class="card-body p-0">
                    <div class="alert alert-primary mb-0" role="alert">
                        <strong>Todavía no tiene suscripciones</strong>
                    </div>                    
                </div>

            </div>

            <div class="card mt-3">
                <div class="card-header">Nuevos mensajes</div>
                <div class="card-body p-0">
                    <div class="alert alert-primary mb-0" role="alert">
                        <strong>Todavía no recibio ningún mensaje</strong>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection
