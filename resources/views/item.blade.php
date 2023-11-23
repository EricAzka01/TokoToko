@extends('layout')

@section('container')

<div class="flex ml-10 mt-10 bg-green-300">

    <div>
        <div class="bg-white shadow-lg rounded-lg">
            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/12/08a0cca3-12e5-4dfd-88f6-5d743beb31f7.jpg" alt="samsung">
        </div>
    </div>

    <div class="border-0 shadow-xl ml-40 px-5 my-5 bg-white">
        <div class="text-center font-bold">
            SAMSUNG SMART TV 65 INCH UHD 4K AU7002 W/ PURCOLOR - UA65AU7002KXXD
        </div>

        <h1 class="text-center mt-2">10 Sold - 200 Stock</h1>

        <h2 class="font-semibold text-2xl text-center mt-5">Rp. 9750000</h2>
        <h2 class="mt-10 font-semibold text-center">Item Description</h2>
        <h2 class="text-center">Good TV</h2>
    </div>
    

    <div class="border-0 shadow-xl ml-40 px-20 bg-white my-10 mr-6">
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

    <div class="mt-5">
        <a href="/cart" class="px-2 py-1 border border-2 border-green-500 text-green-500 font-medium rounded-lg">
            Add to Cart
        </a>
    </div>

</div>
</div>
@endsection