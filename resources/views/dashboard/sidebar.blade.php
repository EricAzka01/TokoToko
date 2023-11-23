@isset($sidebarMenu)
    <div class="sticky top-0 bg-green-500 h-screen w-1/6 py-6 select-none">
        <a href="/dashboard" class="relative">
            <h2 class="font-bold text-3xl text-white flex justify-center">TokoToko</h2>
            <h3 class="font-medium text-white flex justify-center">Seller Dashboard</h3>
        </a>

        <div class="mt-10"></div>

        @foreach ($sidebarMenu as $menu)
            <a href="{{ $menu['url'] }}">
                @if ($menu['name'] == $title)
                    <div class="flex items-center pl-4 py-4 bg-gray-50">
                        <i data-feather="{{ $menu['icon'] }}" class="stroke-green-500 bg-gray-50"></i>
                        <span class="ml-2 text-green-500 font-medium text-lg">{{ $menu['name'] }}</span>
                    </div>
                @else
                    <div class="flex items-center pl-4 py-4">
                        <i data-feather="{{ $menu['icon'] }}" class="stroke-white bg-green-500"></i>
                        <span class="ml-2 text-white font-medium text-lg">{{ $menu['name'] }}</span>
                    </div>
                @endif
            </a>
        @endforeach

        <form action="/logout/seller" method="POST" class="flex items-center">
            @csrf
            <i data-feather="log-out" class="ml-4 stroke-white w-8 h-8"></i>
            <button class="bg-green-500 w-full ml-4 my-4 text-white font-medium text-lg text-left">
                Logout
            </button>
        </form>
    </div>
@endisset
