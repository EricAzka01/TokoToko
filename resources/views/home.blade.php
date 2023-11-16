@extends('layouts.main')

@section('container')

<!-- Home Page -->

<div class="border-0 shadow-xl bg-white mt-10 ml-36 mx-20 px-20 rounded">
    <div class="grid grid-cols-5 gap-1 rounded">
        @for ($i = 0; $i < 10; $i++)
        <div class="border-0 shadow-xl bg-white mx-auto w-36 h-48 mt-10 mb-5">
            
        </div>
        @endfor
    </div>
</div>

@endsection