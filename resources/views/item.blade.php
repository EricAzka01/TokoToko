@extends('layout')

@section('container')
    {{-- Item Description --}}
    <div class="flex mt-12">
        <div class="flex-none bg-white shadow-lg rounded-2xl w-96 h-96">
            <img class="rounded-2xl" src="{{ $item->i_image }}" alt="{{ $item->i_name }}">
        </div>

        <div class="ml-4 px-5 my-5 w-2/3">
            <span class="font-bold text-xl">
                {{ $item->i_name }}
            </span>

            <h1 class="text-gray-500">by {{ $item->seller->s_name }}</h1>

            <h2 class="text-3xl font-semibold text-2xl mt-5">Rp. @convert($item->i_price)</h2>
            <h2 class="mt-12">{{ $item->i_description }}</h2>
        </div>


        <div class="ml-20 bg-white shadow-xl rounded-xl my-10 mr-6 w-96">
            <div class="font-bold text-center mt-10">
                Stock
            </div>

            <div class="flex cursor-pointer place-content-center mt-5 gap-5">
                {{ $item->i_stock }} Available
            </div>

            <div class="mt-20 flex justify-center">
                @auth('buyer')
                    <form action="/cart/add" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">

                        <button type="submit" class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg">
                            Add to Cart
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="/login" class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg">Login to add to cart</a>
                @endguest
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

    <div class="mt-8"></div>

    <h2 class="font-bold text-xl ">Items you might like</h2>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @foreach ($itemsAll as $item)
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


    {{-- End of Product Exploration --}}
@endsection
