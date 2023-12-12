@extends('dashboard.layout')

@section('container')
<h1 class="font-bold text-4xl">Home</h1>

<div class="border shadow-xl rounded-xl mx-48 mt-12">
    <h1 class="text-5xl py-3 text-center text-green-500 mt-10 text-2xl font-bold">Your Shop Details</h1>
    <div class="shadow-xl p-10 rounded-xl flex justify-center items-center gap-20">
        <img class="object-scale-down h-48 w-48" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png">
        <div>
            <div class="border-y-5">
                <h1>{{ $seller->s_name }}</h1>
                <h2>{{ $seller->s_phoneno }}</h2>
                <h2>{{ $seller->s_address }}</h2>
                <h2>{{ $seller->s_email }}</h2>
            </div>
        </div>
    </div>
</div>

@endsection