@extends('layouts.main')

@section('container')
    <div class="mt-10 flex gap-40 place-content-center">
        <!-- Buyer Form -->
        <div class="border-0 shadow-xl rounded p-10 bg-white">
            <p class="text-center mb-5 text-xl font-bold">Buyer Form</p>
            <form action="/register_buyer" method="POST">
                @csrf
                @error('name')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror
                <label for="name">Name</label>
                <input class="p-1 border mb-5 ml-10" type="text" name="name" id="name">
                <br>

                @error('email')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror
                <label for="email">Email</label>
                <input class="p-1 border mb-5 ml-11" type="email" name="email" id="email">
                <br>

                @error('phoneno')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror                
                <label for="phoneno">Phone no.</label>
                <input class="p-1 border mb-5 ml-3" type="text" name="phoneno" id="phoneno">
                <br>

                <label for="address">Address</label>
                <input class="p-1 border mb-5 ml-6" type="text" name="address" id="address">
                <br>

                @error('password')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror
                <label for="password">Password</label>
                <input class="p-1 border mb-5 ml-3" type="password" name="password" id="password">
                <br>
                <button
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mb-5"
                    type="submit">Register</button>
            </form>
        </div>

        <!-- Seller Form -->
        <div class="border-0 shadow-xl rounded p-10 bg-white">
            <p class="text-center mb-5 text-xl font-bold">Seller Form</p>
            <form action="/register_seller" method="POST">
                @csrf
                @error('username')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror
                <label for="name">Name</label>
                <input class="p-1 border mb-5 ml-10" type="text" name="username" id="username">
                <br>

                <label for="toko">Shop Name</label>
                <input class="p-1 border mb-5" type="text" name="toko" id="toko">
                <br>

                <label for="email">Email</label>
                <input class="p-1 border mb-5 ml-11" type="email" name="email" id="email">
                <br>

                <label for="phoneno">Phone no.</label>
                <input class="p-1 border mb-5 ml-3" type="text" name="phoneno" id="phoneno">
                <br>

                <label for="address">Address</label>
                <input class="p-1 border mb-5 ml-6" type="text" name="address" id="address">
                <br>

                @error('password')
                    <span class="text-red-400">{{ $message }}</span><br>
                @enderror
                <label for="password">Password</label>
                <input class="p-1 border mb-5 ml-3" type="password" name="password" id="password">

                <br>

                <button
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mb-5"
                    type="submit">Register</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-20">
        <p><span class="font-bold">Already have an account? </span><a class="text-blue-800 underline font-bold"
                href="/login">Login</a>
        <p>
    </div>
    </div>
    </div>
@endsection
