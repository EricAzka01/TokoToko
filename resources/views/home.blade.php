@extends('layout')

@section('container')
    <div class="border mt-8 bg-white h-80 rounded-lg shadow-xl">
        <a href="#">
            <img src="https://cdn.discordapp.com/attachments/1150649876166737921/1183497118854414356/Frame_1.jpg?ex=65888c95&is=65761795&hm=ff404b8bf6b5f628488fa8a9b0e51e244f523f89f3870c5dc9d646c5041eb20d&"
                alt="liburan-jepang" class="object-cover h-80 w-full rounded-lg">
        </a>
    </div>

    <div class="mb-8"></div>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($items as $item)
            <div class="border w-auto mt-4 bg-white shadow-lg rounded-lg">
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
