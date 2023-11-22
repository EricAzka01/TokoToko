<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>{{ $title }} | TokoToko</title>
</head>
<body class="bg-blue-300">  
  @include('partials.navbar')

  <div class="mx-8 my-8">
    @yield('container')
  </div>
</body>
</html>