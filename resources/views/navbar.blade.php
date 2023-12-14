<nav
    class="bg-white border mx-8 my-6 h-16 top-6 p-4 rounded-lg shadow-lg {{ $title == 'Payment' ? '' : 'sticky' }} z-50">
    <div class="flex justify-between select-none">
        <div class="ml-2 flex">
            <a href="/" class="font-bold text-2xl text-green-500">TokoToko</a>
        </div>

        @auth('buyer')
            <div class="ml-auto flex items-center space-x-5 mr-4">
                {{-- <button id="openModal">
                    <i data-feather="info"></i>
                </button>

                <!-- Modal Background -->
                <div id="modal"
                    class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                    <!-- Modal Content -->
                    <div class="bg-white w-1/2 rounded-lg p-8">
                        <!-- Modal Header -->
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-bold">Frequently Asked Question</h3>
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
                            <h1 class="font-semibold">1. What is TokoToko?</h1>
                            <h2>TokoToko is an online e-commerce store that is made for education purposes</h2>
                            <h1 class="mt-2 font-semibold">2. Who's the Developer Team?</h1>
                            <h2>Eric Azka Nugroho & Muhammad Ghifari Taqiuddin</h2>
                            <h1 class="mt-2 font-semibold">3. How do I buy a product?</h1>
                            <h2>Simply add to cart and checkout the item, it will automatically redirect you to payment. Complete the payment and enjoy the product!</h2>
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
                </script> --}}
                <a href="/cart" class="flex justify-center">
                    <i data-feather="shopping-cart"></i>
                </a>
                <a href="/profile" class="flex"><i data-feather="user"></i></a>

                <form method="POST" action="/logout/buyer" class="flex" onsubmit="return confirmLogout()">
                    @csrf
                    <button type="submit"> <i data-feather="log-out"></i></button>
                </form>
            </div>
        @endauth

        @guest
            <div class="ml-auto flex items-center space-x-4 mr-2">
                <a href="/login" class="px-4 py-1 border border-2 border-green-500 text-green-500 font-medium rounded-lg">
                    Login
                </a>

                <a href="/signup"
                    class="px-4 py-1 border border-2 border-green-500 bg-green-500 text-white font-medium rounded-lg">
                    Sign Up
                </a>
            </div>
        @endguest
    </div>

    <script>
        function confirmLogout() {
            return window.confirm("Are you sure you want to log out?");
        }
    </script>
</nav>
