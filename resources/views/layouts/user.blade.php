<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    <div class="my-main">
        @include('layouts.navbar')
        <div class="web-content min-h-80">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</body>

</html>
