@extends('layouts.main')

@section('container')
<span><a class="text-blue-400 underline" href="/inventory">Back</a><span>
<form action="item_add" method="POST" enctype="multipart/form-data">
    @csrf

    @error('type')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="type">Type</label>
    <select name="type" id="type" class="border p-1">
        @foreach($types as $type)
        <option value="{{ $type->name }}">{{ $type->name}}</option>
        @endforeach
    </select>
    <br>

    @error('condition')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="type">Condition</label>
    <select name="condition" id="condition" class="border p-1">
        @foreach($conditions as $condition)
        <option value="{{ $condition->name }}">{{ $condition->name}}</option>
        @endforeach
    </select>
    <br>

    @error('description')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="description">Description</label>
    <input class="p-1 border" type="text" name="description" id="description">
    <br>

    @error('defects')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="description">Defects (optional)</label>
    <input class="p-1 border" type="text" name="defects" id="defects">
    <br>

    @error('amount')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="description">Amount</label>
    <input class="p-1 border" type="number" name="amount" id="amount">
    <br>

    @error('image')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="description">Image</label>
    <input type="file" name="image" class="p-1">
    <br>

    <button class="border shadow p-1" type="submit">Add Item</button>
</form>
@endsection