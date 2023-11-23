@extends('dashboard.layout')

@section('container')
    <div class="font-bold text-4xl">Inventory</div>

    <div class="mt-12"></div>

    @if (session()->has('addItemSuccess'))
        <div class="text-green-500 font-medium text-lg mb-4">
            {{ session('addItemSuccess') }}
        </div>
    @endif

    <a href="/inventory/add" class="bg-green-500 px-4 py-2 text-white font-medium rounded-lg">Add Item</a>

    @if (count($items) > 0)
        @foreach ($items as $item)
            <ul>
                <li>{{ $item['i_name'] }}</li>
            </ul>
        @endforeach
    @else
        <div class="mt-12">No items yet</div>
    @endif
@endsection
