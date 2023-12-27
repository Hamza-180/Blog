
@extends('layouts.app')

@section('content')
    <h2>Create FAQ Category</h2>

    <form action="{{ route('faq-categories.store') }}" method="post">
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Create</button>
    </form>
@endsection
