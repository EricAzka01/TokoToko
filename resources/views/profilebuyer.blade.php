@extends('layout')

@section('container')
    <div class="border shadow-xl rounded-xl mx-20">
        <h1 class="text-4xl py-3 text-center text-green-500 mt-10 font-bold">Profile</h1>
        <div class="shadow-xl p-10 rounded-xl flex justify-center items-center gap-20">
            <img class="object-scale-down h-48 w-48" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png">
            <div>
                <div class="border-y-5">
                    <h1>Name: {{ $user->b_name }}</h1>
                    <h2>Phone Number: {{ $user->b_phoneno }} </h2>
                    <h2>Address: {{ $user->b_address }}</h2>
                    <h2>Email: {{ $user->b_email }}</h2>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-2xl font-bold mt-6 flex justify-center text-green-500">Order</h2>
    <table class="w-full text-center">
        <tr>
            <th class="border font-bold">Image</th>
            <th class="border font-bold">Name</th>
            <th class="border font-bold">Tracking Code</th>
            <th class="border font-bold">Status</th>
            <th class="border font-bold">Confirmation</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td class="border"><img class="w-32 h-32" src="{{ $order->item->i_image }}"
                        alt="{{ $order->item->i_slug }}"></td>
                <td class="border">{{ $order->item->i_name }}</td>
                <td class="border">
                    @if ($order->t_status == 'WAITING')
                        <span>-</span>
                    @else
                        <span>{{ $order->t_trackingcode }}</span>
                    @endif
                </td>

                <td class="border"><span class="font-bold text-green-500">{{ $order->t_status }}</span></td>

                <td class="border">
                    @if ($order->t_status == 'RECEIVED' or $order->t_status == 'WAITING')
                        <span>-</span>
                    @else
                        <form action="/order/received" method="POST">
                            @csrf
                            <input type="hidden" name="t_id" value="{{ $order->id }}">

                            <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-lg">I received my
                                order</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
