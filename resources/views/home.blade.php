@extends('layout')

@section('container')
    <div class="mt-8 bg-white h-80 rounded-lg shadow-xl">
        <a href="#">
            <img src="https://gist.github.com/assets/59758342/a76c43a0-3bf4-436d-97a2-928ebebce210" alt="Item" class="overflow-hidden h-80 w-full rounded-lg">
        </a>
    </div>

    <div class="mb-8"></div>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($items as $item)
            <div class="w-auto mt-4 bg-white shadow-lg rounded-lg">
                <a href="/item/{{ $item->id }}">
                    <img src="{{ $item->i_image }}" alt="item" class="object-cover rounded-t-lg">
                    <div class="mt-2 ml-3 mb-4">
                        <div class="text-sm">{{ $item->i_name }}</div>
                        <div class="font-bold">Rp{{ $item->i_price }}</div>
                        <div class="text-xs mt-2">{{ $item->seller->s_name }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
