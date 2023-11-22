@extends('layouts.main')

@section('container')

<!-- Home Page -->
<div>
<div class=" mx-auto py-24 px-4 mt-10 text-center flex">
    <div class="w-96 h-96 ml-5">
        <img src="{{ asset('images/shop.png') }}" alt="shop">
    </div>
    <h1 class="text-9xl font-bold text-black mb-4 ml-20 mt-12">TokoToko</h1>
</div>
</div>

<div class="container mx-auto py-12 px-4">
    <h2 class="text-2xl font-semibold mb-4 text-black text-center">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
       @for ($i=0; $i<10; $i++)
        <div class="bg-white rounded-lg shadow-md p-4">
            <img src="https://via.placeholder.com/300" alt="Product" class="mb-4 item-center">
            <h3 class="text-lg font-semibold mb-2">Product Title</h3>
            <p class="text-sm text-gray-600 mb-2">Product Description</p>
            <p class="text-lg font-bold text-blue-300">$99.99</p>
            <button class="mt-4 bg-blue-300 text-white py-2 px-4 rounded-full hover:bg-blue-400 transition duration-300">Add to Cart</button>
        </div>
        @endfor
       
    </div>
</div>
@endsection