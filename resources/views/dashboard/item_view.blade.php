@extends('dashboard.layout')

@section('container')
    <a href="/dashboard/inventory" class="px-4 py-2 bg-green-500 text-white rounded-lg">
        Back to inventory
    </a>

    <div class="flex mt-12">
        <div class="border flex-none bg-white shadow-lg rounded-2xl w-96 h-96">
            <img class="rounded-2xl" src="{{ $item->i_image }}" alt="{{ $item->i_name }}">
        </div>

        <div class="ml-4 px-5 my-5 w-2/3">
            <span class="font-semibold text-xl">
                {{ $item->i_name }}
            </span><br>

            <h2 class="text-3xl font-bold text-2xl mt-2">Rp @convert($item->i_price)</h2>

            <div class="mt-8">
                <span class="font-bold">Description</span><br>
                <p>{{ $item->i_description }}</p><br>

                <span class="font-bold mt-4">Stock</span>
                <p>{{ $item->i_stock }}</p>
            </div>

            <div class="flex space-x-2">
                <form action="/item/delete" method="POST" onsubmit="return confirmDelete()">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">

                    <button type="submit">
                        <div class="bg-red-500 px-4 py-2 flex items-center justify-center rounded-md mx-auto mt-1">
                            <i data-feather="trash-2" class="stroke-white"></i>
                            <span class="text-white font-medium">Delete</span>
                        </div>
                    </button>
                </form>

                <form action="/item/edit" method="POST">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">

                    <button type="submit">
                        <div class="bg-yellow-500 px-4 py-2 flex items-center justify-center rounded-md mx-auto mt-1">
                            <i data-feather="edit" class="stroke-white"></i>
                            <span class="text-white font-medium">Edit</span>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return window.confirm("Are you sure you want to delete this item?");
        }
    </script>
@endsection
