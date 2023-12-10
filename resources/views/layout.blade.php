<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v3.x.x/dist/alpine.min.js" defer></script>
    {{-- <link rel="stylesheet" href="/styles.css"> --}}
    @vite('resources/css/app.css')
    <title>{{ $title }} | TokoToko</title>
</head>

<body class="bg-gray-50">
    @include('navbar')

    <div class="mx-24 my-10">
        @yield('container')
    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>