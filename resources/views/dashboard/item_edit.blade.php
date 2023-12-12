@extends('dashboard.layout')

@section('container')
    <a href="/dashboard/inventory" class="px-4 py-2 bg-green-500 text-white rounded-lg">Back to inventory</a>
    <div class="mt-6"></div>

    <div class="font-bold text-3xl">Edit {{ $item->i_name }}</div>

    <div class="mt-12"></div>

    <form action="/item/save_edit" method="POST">
        @csrf

        <label class="mt-2">Item name</label><br>
        @error('i_name')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
        <input type="text" name="i_name" placeholder="Your item name" value="{{ $item->i_name }}"
            class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

        <label class="mt-2">Item price (Rp)</label><br>
        @error('i_price')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
        <input type="number" name="i_price" placeholder="Your item price" value="{{ $item->i_price }}"
            class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

        <label class="mt-2">Item description</label><br>
        @error('i_description')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
        <textarea name="i_description" placeholder="Your item description" rows="5"
            class="resize-none mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">
            {{ $item->i_description }}
        </textarea>

        <label class="mt-2">Item stock</label><br>
        @error('i_stock')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
        <input type="number" name="i_stock" placeholder="Your item stock" value="{{ $item->i_stock }}"
            class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">


        <input type="hidden" name="item_id" value="{{ $item->id }}">

        <div class="mt-6"></div>
        <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg">Save edit</button>
    </form>
@endsection
