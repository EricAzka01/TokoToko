@extends('auth.layout')

@section('container')
    <div class="mt-16"></div>

    @if (session()->has('signupSuccess'))
        <div class="text-green-500 font-medium text-xl flex justify-center">
            {{ session('signupSuccess') }}
        </div>
    @endif

    @if (session()->has('loginFailed'))
        <div class="text-red-500 font-medium text-xl flex justify-center">
            {{ session('loginFailed') }}
        </div>
    @endif

    <div class="text-3xl font-bold flex justify-center">
        Login as...
    </div>

    <div class="mt-8 flex justify-center space-x-12">
        <div class="w-1/3 rounded-xl shadow-lg bg-white">
            <div class="p-8">
                <div class="font-semibold text-2xl flex justify-center">Buyer</div>
                <div class="mt-6"></div>
                <form action="/login/buyer" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="mt-2">Email</label><br>
                    @error('b_email')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="b_email" placeholder="Your email" value="{{ old('b_email') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Password</label><br>
                    @error('b_password')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="password" name="b_password" placeholder="Your password"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <button class="mt-6 bg-green-500 text-white font-medium px-6 py-2 rounded-lg"
                        type="submit">Login</button>
                </form>
            </div>
        </div>

        <div class="w-1/3 rounded-lg shadow-lg bg-white">
            <div class="p-8">
                <div class="font-semibold text-2xl flex justify-center">Seller</div>
                <div class="mt-6"></div>
                <form action="/login/seller" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="mt-2">Email</label><br>
                    @error('s_email')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="s_email" placeholder="Your email" value="{{ old('s_email') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Password</label><br>
                    @error('s_password')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="password" name="s_password" placeholder="Your password"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <button class="mt-6 bg-green-500 text-white font-medium px-6 py-2 rounded-lg"
                        type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <span>Don't have an account? <a href="/signup" class="text-green-500 underline">Sign up</a> here</span>
    </div>
@endsection
