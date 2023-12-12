<nav class="bg-white border mx-8 my-6 h-16 top-6 p-4 rounded-lg shadow-lg {{ $title == 'Payment' ? "" : 'sticky' }} z-50">
    <div class="flex justify-between select-none">
        <div class="ml-2 flex">
            <a href="/" class="font-bold text-2xl text-green-500">TokoToko</a>
        </div>

        @auth('buyer')
            <div class="ml-auto flex items-center space-x-5 mr-4">
                <a href="/cart" class="flex"><i data-feather="shopping-cart"></i></a>
                <a href="/profile"  class="flex"><i data-feather="user"></i></a>

                <form method="POST" action="/logout/buyer" class="flex">
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
</nav>
