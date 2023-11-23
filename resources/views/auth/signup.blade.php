@extends('auth.layout')

@section('container')
    <div class="mt-8 text-3xl font-bold flex justify-center">
        Sign up as...
    </div>

    <div class="mt-8 flex justify-center space-x-12">
        <div class="w-1/3 rounded-xl shadow-lg bg-white">
            <div class="p-8">
                <div class="font-semibold text-2xl flex justify-center">Buyer</div>
                <div class="mt-6"></div>
                <form action="/signup/buyer" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="mt-2">Name</label><br>
                    @error('b_name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="b_name" placeholder="Your name" value="{{ old('b_name') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Email</label><br>
                    @error('b_email')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="b_email" placeholder="Your email" value="{{ old('b_email') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Phone number</label><br>
                    @error('b_phoneno')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="b_phoneno" placeholder="Your phone number" value="{{ old('b_phoneno') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Address</label><br>
                    @error('b_address')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="b_address" placeholder="Your address" value="{{ old('b_address') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Password (min. 6 characters)</label><br>
                    @error('b_password')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="password" name="b_password" placeholder="Your password"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <button class="mt-6 bg-green-500 text-white font-medium px-6 py-2 rounded-lg" type="submit">Sign
                        Up</button>
                </form>
            </div>
        </div>

        <div class="w-1/3 rounded-lg shadow-lg bg-white">
            <div class="p-8">
                <div class="font-semibold text-2xl flex justify-center">Seller</div>
                <div class="mt-6"></div>
                <form action="/signup/seller" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="mt-2">Shop name</label><br>
                    @error('s_name')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="s_name" placeholder="Your shop name" value="{{ old('s_name') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Email</label><br>
                    @error('s_email')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="s_email" placeholder="Your email" value="{{ old('s_email') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Phone number</label><br>
                    @error('s_phoneno')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="s_phoneno" placeholder="Your phone number" value="{{ old('s_phoneno') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Address</label><br>
                    @error('s_address')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="text" name="s_address" placeholder="Your address" value="{{ old('s_address') }}"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <label class="mt-2">Password (min. 6 characters)</label><br>
                    @error('s_password')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                    <input type="password" name="s_password" placeholder="Your password"
                        class="mt-2 mb-2 outline outline-gray-200 outline-1 focus:outline-none rounded-lg p-2 focus:ring focus:ring-green-500 w-full">

                    <button class="mt-6 bg-green-500 text-white font-medium px-6 py-2 rounded-lg" type="submit">Sign
                        Up</button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <span>Already have an account? <a href="/login" class="text-green-500 underline">Login</a> here</span>
    </div>
@endsection
