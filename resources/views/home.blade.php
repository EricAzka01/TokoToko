@extends('layout')

@section('container')
    <div class="mt-8 bg-white h-80 rounded-lg shadow-xl">
        <a href="#">
            <img src="https://cdn.discordapp.com/attachments/1150649876166737921/1179068314706776114/Frame_1.png?ex=65786ff0&is=6565faf0&hm=3282e5265b11b9b1d240a92ea69c98a71a5919816fe6277d413121f2dd250079&" alt="Item" class="object-cover h-80 w-full rounded-lg">
        </a>
    </div>

    <div class="mb-8"></div>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($items as $item)
            <div class="w-auto mt-4 bg-white shadow-lg rounded-lg">
                <a href="/item/{{ $item->i_slug }}">
                    <img src="{{ $item->i_image }}" alt="item" class="object-cover rounded-t-lg">
                    <div class="mt-2 ml-3 mb-4">
                        <div class="text-sm">{{ $item->i_name }}</div>
                        <div class="font-bold">Rp @convert($item->i_price)</div>
                        <div class="text-xs mt-2">{{ $item->seller->s_name }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
