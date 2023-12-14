@extends('dashboard.layout')

@section('container')
    <h1 class="font-bold text-4xl">Order</h1>
    <div class="mt-10"></div>

    <table class="w-full text-center">
        <tr class="border">
            <th class="border">ID</th>
            <th class="border">Image</th>
            <th class="border">Name</th>
            <th class="border">Quantity</th>
            <th class="border">Total Price</th>
            <th class="border">Buyer</th>
            <th class="border">Address</th>
            <th class="border">Payment Proof</th>
            <th class="border">Tracking code</th>
            <th class="border">Status</th>
        </tr>
        @foreach ($orders as $order)
            <tr class="border">
                <td class="border">{{ $order->id }}</td>
                <td class="border"> <img class="w-32 h-32 rounded-lg" src="{{ $order->item->i_image }}"
                        alt="{{ $order->item->i_slug }}">
                </td>
                <td class="border">{{ $order->item->i_name }}</td>
                <td class="border">{{ $order->t_quantity }}</td>
                <td class="border">Rp @convert($order->t_totalprice)</td>
                <td class="border">{{ $order->buyer->b_name }}</td>
                <td class="border w-1/4">{{ $order->buyer->b_address }}</td>
                <td class="border"><a class="text-green-500 underline" href="{{ $order->t_paymentproof }}"
                        target="_blank">Link</a></td>
                <td class="border">{{ $order->t_trackingcode ?? '-' }}</td>

                <td class="border">
                    @if ($order->t_status == 'WAITING')
                        <form action="/transaction/confirm" method="POST" id="confirm_order_{{ $order->id }}">
                            @csrf
                            <input type="hidden" name="t_id" value="{{ $order->id }}">
                            <input type="hidden" name="t_trackingcode" id="t_trackingcode_{{ $order->id }}"
                                value="">

                            <button type="button" onclick="addTrackingCode({{ $order->id }})"
                                class="border bg-green-500 rounded-lg px-6 py-2 text-white">Confirm</button>
                        </form>
                    @else
                        <span class="font-bold text-green-500">{{ $order->t_status }}</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        function addTrackingCode(orderId) {
            var userInput = prompt("Enter tracking code for order #" + orderId + ":");

            // Check if the user clicked "Cancel" or entered nothing
            if (userInput !== null && userInput !== "") {
                // Set tracking code in the hidden input field
                document.getElementById('t_trackingcode_' + orderId).value = userInput;

                // Submit the form
                document.getElementById('confirm_order_' + orderId).submit();
            }
        }
    </script>
@endsection
