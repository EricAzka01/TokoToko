@extends('layout')

@section('container')
    {{-- Item Description --}}
    <div class="flex ml-10 mt-24 bg-green-300">

        <div>
            <div class="bg-white shadow-lg rounded-lg">
                <img src="{{ $item->i_image }}" alt="product image">
            </div>
        </div>

        <div class="border-0 shadow-xl ml-40 px-5 my-5 bg-white">
            <div class="text-center font-bold">
                {{ $item->i_name }}
            </div>

            <h1 class="text-center mt-2">{{ $item->i_stock }} Available</h1>

            <h2 class="font-semibold text-2xl text-center mt-5">Rp.{{ $item->i_price }}</h2>
            <h2 class="mt-10 font-semibold text-center">Item Description</h2>
            <h2 class="text-center">{{ $item->i_description }}</h2>
        </div>


        <div class="border-0 shadow-xl ml-40 bg-white my-10 mr-6 w-96">
            <div class="font-bold text-center mt-4">
                Quantity
            </div>

            <div class="flex cursor-pointer place-content-center mt-5 gap-5">
                <div>-</div>
                <div>0</div>
                <div>+</div>
            </div>

            <div class="font-bold text-center mt-24">
                Subtotal:
            </div>

            <div class="mt-5 flex justify-center">
                <a href="/cart" class="px-2 py-1 border border-2 border-green-500 text-green-500 font-medium rounded-lg">
                    Add to Cart
                </a>
            </div>

        </div>
    </div>
    {{-- End of Item Description --}}

    {{-- Product Exploration --}}
    <div class="mt-8"></div>

    <h2 class="font-bold text-xl ">Other items from this shop</h2>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($itemsBySeller as $item)
            <div class="w-auto mt-4 bg-white shadow-lg rounded-lg">
                <a href="/item/{{ $item->id }}">
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

    <div class="mt-8"></div>

    <h2 class="font-bold text-xl ">Items you might like</h2>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($itemsAll as $item)
            <div class="w-auto mt-4 bg-white shadow-lg rounded-lg">
                <a href="/item/{{ $item->id }}">
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


    {{-- End of Product Exploration --}}
@endsection
