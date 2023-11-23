<div class="sticky top-0 bg-green-500 h-screen w-1/6 py-6 select-none">
    <a href="/dashboard" class="relative">
        <h2 class="font-bold text-3xl text-white flex justify-center">TokoToko</h2>
        <h3 class="font-medium text-white flex justify-center">Seller Dashboard</h3>
    </a>

    <div class="mt-10"></div>

    @foreach ($sidebarMenu as $menu)
        <a href="{{ $menu['url'] }}">
            @if ($menu['name'] == $title)
                <div class="bg-gray-50 w-full pl-4 py-4 text-green-500 font-medium text-lg">
                    {{ $menu['name'] }}
                </div>
            @else
                <div class="bg-green-500 w-full pl-4 py-4 text-white font-medium text-lg">
                    {{ $menu['name'] }}
                </div>
            @endif
        </a>
    @endforeach
    
    <form action="/logout/seller" method="POST">
        @csrf
        <button class="bg-green-500 w-full pl-4 py-4 text-white font-medium text-lg text-left">Log out</button>
    </form>
</div>