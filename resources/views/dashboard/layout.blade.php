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

    <div class="flex flex-col-2">
        @include('dashboard.sidebar')

        <div class="mx-10 my-6 w-3/4">
            @yield('container')
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>
