@extends('layout')

@section('container')
    <div class="border shadow-xl rounded-xl mx-20">
        <h1 class="text-4xl py-3 text-center text-green-500 mt-10 font-bold">Payment</h1>
        <div class="shadow-xl p-8 rounded-xl flex justify-center items-center gap-20">
            <img class="object-scale-down h-72 w-72" src="{{ $item->i_image }}">
            <div>
                <div class="border-y-5">
                    <h1 class="text-xl">{{ $item->i_name }}</h1>
                    <h2 class="font-semibold text-3xl">Rp @convert($item->i_price)</h2>
                    <h2 class="text-gray-500 font-medium text-lg">1x</h2>
                </div>

                <div class="mt-8">
                    <h1 class="font-semibold">Select Payment Method</h1>
                    <!-- Gopay Modal Trigger Button -->
                    <button id="openModal" class="border shadow-xl mr-5 rounded-xl px-4 py-2 mt-5">
                        Gopay
                    </button>

                    <!-- Modal Background -->
                    <div id="modal"
                        class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                        <!-- Modal Content -->
                        <div class="bg-white w-1/2 rounded-lg p-8">
                            <!-- Modal Header -->
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-bold">Gopay</h3>
                                <!-- Close Button -->
                                <button id="closeModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Modal Body -->
                            <div class="mt-4">
                                <img src="https://cdn.discordapp.com/attachments/1150649876166737921/1183389733531951175/qr.png?ex=65882892&is=6575b392&hm=c48b91ed0da8a68ac3c98c4b93a8a06ba462ebf469ddd6a5f798b197e6e93536&"
                                    class="w-52 h-52" alt="SCAM">
                                <h1 class="font">a.n. Eric Azka Nugroho</h1>
                                <button class="border mr-5 px-4 py-2 mt-5 bg-green-500 text-white rounded-lg">Confirm</button>
                            </div>
                        </div>
                    </div>

                    <!-- Include Tailwind JavaScript for toggling modal -->
                    <script>
                        const openModalBtn = document.getElementById('openModal');
                        const closeModalBtn = document.getElementById('closeModal');
                        const modal = document.getElementById('modal');

                        openModalBtn.addEventListener('click', () => {
                            modal.classList.remove('hidden');
                        });

                        closeModalBtn.addEventListener('click', () => {
                            modal.classList.add('hidden');
                        });
                    </script>

                    <form class="mt-4" action="/transaction/add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="t_quantity" value="1">
                        <input type="hidden" name="t_paymentmethod" value="GoPay">
                        <input type="hidden" name="t_totalprice" value="{{ $item->i_price }}">
                        <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">
                        <input type="hidden" name="seller_id" value="{{ $item->seller_id }}">
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <label class="font-semibold" for="t_paymentproof">Upload your payment proof</label><br>
                        <input type="file" name="t_paymentproof" id="t_paymentproof"><br>

                        <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded-lg" type="submit">Check out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
