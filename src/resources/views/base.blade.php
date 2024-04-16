<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>

    <title>@yield('title')</title>
    <x-head.tinymce-config/>

</head>

<body>
    <x-header/>
    <div id="container" class="flex flex-col items-center w-full p-6 my-5">
        <div class="w-2/3">
            @yield('container')
        </div>
    </div>
</body>

<footer class="bg-neutral-700 text-center lg:text-left bottom-0">
    <div class="p-4 text-center text-surface text-white">
        <x-footer/>
    </div>
</footer>

</html>
