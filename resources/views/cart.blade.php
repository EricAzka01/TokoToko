@extends('layout')

@section('container')
    @if (count($cartItems) == 0)
        <div class="place-items-center">
            <div class="justify-center flex mt-24">
                <img class="overflow-hidden w-48 h-48"
                    src="https://static.vecteezy.com/system/resources/previews/021/495/594/original/3d-shopping-cart-with-a-basket-icon-illustration-png.png"
                    alt="cart" />
            </div>

            <div class="text-2xl font-bold mt-12 flex justify-center">
                <p>Cart is still empty!</p>
            </div>

            <div class="flex justify-center mt-5">
                <a href="/" class="bg-green-500 rounded-xl px-6 py-2 text-white">Let's Shop</a>
            </div>
        </div>
    @else
        @foreach ($cartItems as $item)
            <div class="border bg-white py-6 px-2 rounded-lg shadow-lg flex mb-8">
                <img src="{{ $item->i_image }}" alt="{{ $item->i_name }}" class="w-32 h-32 justify-start">
                <div class="ml-8">
                    <span class="">{{ $item->i_name }}</span><br>
                    <span class="text-xl font-semibold">Rp @convert($item->i_price)</span><br>
                    <span class="text-sm text-gray-500 mt-6">{{ $item->seller->s_name }}</span>
                </div>

                <div class="mr-auto space-x-4 flex">
                    <form action="/cart/checkout" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-lg">Checkout</button>
                    </form>

                    <form action="/cart/delete" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded-lg">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

    <div class="mt-24">
        <h2 class="font-bold text-xl ">Items you might like</h2>

        <div class="grid grid-cols-6 gap-6 justify-items-center">
            @foreach ($itemsAll as $item)
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
    </div>
@endsection
