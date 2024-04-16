<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">


    <title>@yield('title')</title>

</head>

<body>
    <x-header/>
    <div id="container">
        @yield('container')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

<footer class="bg-neutral-700 text-center lg:text-left absolute bottom-0 w-screen">
    <div class="p-4 text-center text-surface text-white">
        @include('footer')
    </div>
</footer>

</html>
