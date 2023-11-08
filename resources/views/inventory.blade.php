@extends('layouts.main')

@section('container')
<p>Hello, {{ auth()->user()->username }} (<a class="text-red-400 underline" href="/logout">Log out</a>)</p>

<br>

<a class="text-blue-400 underline" href="/item_add">Add new item</a>

<br>

@if(session()->has('addItemSuccess'))
<div class="text-green-600">
    {{ session('addItemSuccess') }}
</div>
@endif

<br>

<table class="w-full text-sm text-center border">
    <tr class="border">
        <th class="border">Type</th>
        <th class="border">Condition</th>
        <th class="border">Description</th>
        <th class="border">Defects</th>
        <th class="border">Amount</th>
        <th class="border">Image</th>
    </tr>

    @foreach ($items as $item)
    <tr>
        <td class="border">{{ $item->type }}</td>
        <td class="border">{{ $item->condition }}</td>
        <td class="border">{{ $item->description }}</td>
        <td class="border">{{ $item->defects }}</td>
        <td class="border">{{ $item->amount }}</td>
        <td class="border">
            <img class="object-scale-down h-32 w-32" src="{{ $item->image }}">
        </td>
    </tr>
    @endforeach
</table>
@endsection