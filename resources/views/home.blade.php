@extends('layout')

@section('container')
    <div class="mt-8 bg-white h-80 rounded-lg shadow-xl">
        <a href="#">
            <img src="https://img.freepik.com/free-vector/vector-illustration-super-sale-banner-template-design_260559-246.jpg" alt="Item" class="object-cover h-80 w-full rounded-lg">
        </a>
    </div>

    <div class="mb-8"></div>

    <div class="grid grid-cols-6 gap-6 justify-items-center">
        @for ($i = 0; $i < 18; $i++)
            <div class="w-auto mt-4 bg-white shadow-lg rounded-lg">
                <a href="#">
                    <img src="https://placehold.co/300x300" alt="Item" class="object-cover rounded-t-lg">
                    <div class="mt-2 ml-3 mb-4">
                        <div class="text-sm">Item name</div>
                        <div class="font-bold">Rp{{ random_int(1000, 10000) }}</div>
                        <div class="text-xs mt-2">Shopname</div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
@endsection
