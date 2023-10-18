<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>

    <body class="min-h-screen justify-center">
        
        {{-- Dashboard --}}
        <div>
        TOKOTOKO
        </div>

        {{-- Content --}}
        <div class="border-0 rounded-xl shadow-xl mx-32 mt-10 place-content-center p-5 mr-32 grid grid-cols-3">
            @foreach ($items as $item)
                <div class="border-0 shadow-md p-3 mx-3 rounded-xl text-center my-3 hover:shadow-xl hover:cursor-pointer">
                    {{-- <p>{{ $item['stock'] }}</p> --}}

                    @if ($item['stock'] == 0)
                    <p class="line-through">{{ $item['name'] }}</p>
                    @else
                    <p>{{ $item['name'] }}</p>
                    @endif


                    <p>{{ $item['stock'] }}</p>
                    <p>{{ $item['price'] }}</p>
                    <p>{{ $item['location'] }}</p>
                </div>
            @endforeach
        </div>


    </body>

</html>