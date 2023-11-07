<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Laravel 10 - Query Builder')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs5i.css') }}">
    @yield('styles')
</head>

<body>
    <header>
        @include('layouts.partials.navbar')
        <h3 class="text-center">@yield('h3', 'Laravel 10 - Query Builder')</h3>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer class="w-100">
        @include('layouts.partials.footer')
    </footer>

    @yield('scripts')
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
</body>

</html>
