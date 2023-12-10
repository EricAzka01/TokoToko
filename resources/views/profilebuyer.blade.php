@extends('layout')

@section('container')
    <div class="border shadow-xl rounded-xl mx-20">
        <h1 class="text-5xl py-3 text-center text-green-500 mt-10 text-2xl font-bold">Profile</h1>
        <div class="shadow-xl p-10 rounded-xl flex justify-center items-center gap-20">
            <img class="object-scale-down h-48 w-48" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png">
            <div>
                <div class="border-y-5">
                    <h1>Name: {{ $user->b_name }}</h1>
                    <h2>Phone Number: {{ $user->b_phoneno }} </h2>
                    <h2>Address: {{ $user->b_address }}</h2>
                    <h2>Email: {{ $user->b_email }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection