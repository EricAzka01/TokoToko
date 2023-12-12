@extends('dashboard.layout')

@section('container')
    <h1 class="font-bold text-4xl">Order</h1>

    <div class="border shadow-xl rounded-xl mt-20">
        <p class="text-2xl font-medium ml-5 mt-3">Recent Order</p>
        {{-- For Each Command --}}
        <div class="border shadow-xl rounded-xl mt-10 mx-8 mb-10 ">
            <div class="ml-5 mt-5 flex gap-40 mb-5 mr-3">
                <p class="font-bold">Foto</p>
                <p>Item Name</p>
                <p>Buyer Name: </p>
                <p>Quantity:</p>
                <button class="border bg-green-500 rounded-xl px-4 py-2 text-white">Confirm</button>
            </div>
        </div>
    </div>
@endsection
