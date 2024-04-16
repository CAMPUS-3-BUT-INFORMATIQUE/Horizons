<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">


    <title>@yield('title')</title>

</head>

<body class="font-['Ubuntu']">

    <div id="container">
        @yield('container')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
