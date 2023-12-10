@extends('layout')

@section('container')


@if (count($cartItems) == 0)
<div class="place-items-center">
    <div class="justify-center flex mt-24">
        <img class="overflow-hidden w-48 h-48" src="https://static.vecteezy.com/system/resources/previews/021/495/594/original/3d-shopping-cart-with-a-basket-icon-illustration-png.png" alt="cart"/>
    </div>

    <div class="text-2xl font-bold mt-12 flex justify-center">
        <p>Cart is still empty!</p>
    </div>

    <div class="flex justify-center mt-5">
        <a href="/" class="button bg-green-400 rounded-xl px-3 py-2 text-white">Let's Shop!</a>
    </div>
</div>
@else

@endif


<div class="mt-24">
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
</div>

@endsection