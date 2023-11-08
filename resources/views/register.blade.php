@extends('layouts.main')

@section('container')

<div class="mt-10 flex gap-40 place-content-center">
    <!-- Buyer Form -->
    <div class="border-0 shadow-xl rounded p-10 bg-white"> 
    <p class="text-center mb-5 text-xl font-bold">Buyer Form</p> 
    <form action="/register" method="POST">
    @csrf
    @error('username')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="username">Username</label>
    <input class="p-1 border mb-5" type="text" name="username" id="username">

    <br>
    @error('password')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="password">Password</label>
    <input class="p-1 border mb-5 ml-1" type="password" name="password" id="password">

    <br>

    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mb-5" type="submit">Register</button>
</form>
    </div>

    <!-- Seller Form -->
    <div class="border-0 shadow-xl rounded p-10 bg-white">
    <p class="text-center mb-5 text-xl font-bold">Seller Form</p>
    <form action="/register" method="POST">
    @csrf
    @error('username')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="username">Username</label>
    <input class="p-1 border mb-5" type="text" name="username" id="username">

    <br>
    @error('password')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="password">Password</label>
    <input class="p-1 border mb-5 ml-1" type="password" name="password" id="password">

    <br>

    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mb-5" type="submit">Register</button>
</form>
    </div>
</div>

<div class="text-center mt-20">
<p><span class="font-bold">Already have an account? </span><a class="text-blue-800 underline font-bold" href="/login">Login</a><p>
</div>
</div>
</div>

@endsection