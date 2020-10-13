<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! !empty($title) ? 'Cabaña la asunción - '.$title :  'Cabaña la asunción' !!}</title>

    @include('layouts.particals.links')

</head>
<body>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="B" class="letters-loading">
                            B
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="Ñ" class="letters-loading">
                            Ñ
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>                    
                    </div>
                    <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="U" class="letters-loading">
                            U
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="Ó" class="letters-loading">
                            Ó
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                    </div>
                    <p class="text-center">Cargando</p>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-4 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-4 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-4 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.particals.navbar')

        <div class="body_wrapper">
            @yield('content')
        </div>

    @include('layouts.particals.scripts')
</body>
</html>
