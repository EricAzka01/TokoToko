@extends('dashboard.layout')

@section('container')
    <div class="font-bold text-4xl">Inventory</div>

    <div class="mt-12"></div>

    @if (session()->has('addItemSuccess'))
        <div class="text-green-500 font-medium text-lg mb-4">
            {{ session('addItemSuccess') }}
        </div>
    @endif

    @if (session()->has('itemDeleteSuccess'))
        <div class="text-red-500 font-medium text-lg mb-4">
            {{ session('itemDeleteSuccess') }}
        </div>
    @endif

    @if (session()->has('itemUpdateSuccess'))
        <div class="text-green-500 font-medium text-lg mb-4">
            {{ session('itemUpdateSuccess') }}
        </div>
    @endif

    <a href="/dashboard/item/add" class="bg-green-500 px-4 py-2 text-white font-medium rounded-lg">Add Item</a>

    <div class="mt-10"></div>

    @if (count($items) > 0)
        <table class="w-full text-center border">
            <tr class="border">
                <th class="border">Name</th>
                <th class="border">Price</th>
                <th class="border">Stock</th>
                <th class="border">Image</th>
                <th class="border">Action</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td class="border">{{ $item->i_name }}</td>
                    <td class="border">Rp @convert($item->i_price)</td>
                    <td class="border">{{ $item->i_stock }}</td>
                    <td class="border">
                        <img class="object-scale-down h-32 w-32 mx-auto" src="{{ $item->i_image }}">
                    </td>

                    <td class="border">
                        <a href="/dashboard/item/{{ $item->i_slug }}">
                            <div class="bg-green-500 w-8 h-8 flex items-center justify-center rounded-md mx-auto">
                                <i data-feather="eye" class="stroke-white"></i>
                            </div>
                        </a>

                        <form action="/item/edit" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">

                            <button type="submit">
                                <div class="bg-yellow-500 w-8 h-8 flex items-center justify-center rounded-md mx-auto mt-1">
                                    <i data-feather="edit" class="stroke-white"></i>
                                </div>
                            </button>
                        </form>

                        <form action="/item/delete" method="POST" onsubmit="return confirmDelete()">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">

                            <button type="submit">
                                <div class="bg-red-500 w-8 h-8 flex items-center justify-center rounded-md mx-auto mt-1">
                                    <i data-feather="trash-2" class="stroke-white"></i>
                                </div>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="mt-12 text-xl font-semibold">No items yet</div>
    @endif

    <script>
        function confirmDelete() {
            return window.confirm("Are you sure you want to delete this item?");
        }
    </script>
@endsection
