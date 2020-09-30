<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! !empty($title) ? 'Cabaña La Asunción - '.$title :  'Cabaña La Asunción' !!}</title>

    @include(layouts.particals.links)

</head>
<body>
    <div id="app">

        @include(layouts.particals.navbar)

        <div>
            @yield('content')
        </div>
    </div>
    @include(layouts.particals.scripts)
</body>
</html>
