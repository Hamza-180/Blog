<!-- resources/views/faq-categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit FAQ Category</h2>

    <form action="{{ route('faq-categories.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Category Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
