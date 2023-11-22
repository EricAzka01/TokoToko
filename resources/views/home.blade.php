@extends('layouts.main')

@section('container')

<!-- Home Page -->

<div class="border-0 shadow-xl rounded bg-green-300 mx-auto py-12 px-4 mt-10 text-center">
    <h1 class="text-6xl font-bold text-black mb-4">Welcome to our E-commerce Store</h1>
    <p class="text-2xl text-black mb-8">Explore our amazing collection of products</p>
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