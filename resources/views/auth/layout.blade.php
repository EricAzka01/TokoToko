<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- <link rel="stylesheet" href="/styles.css"> --}}
    @vite('resources/css/app.css')
    <title>{{ $title }} | TokoToko</title>
</head>

<body class="bg-gray-50">
    <div class="mx-12 my-10">
        <a href="/" class="font-bold text-3xl text-green-500">TokoToko</a>
        <div>
            @yield('container')
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>
