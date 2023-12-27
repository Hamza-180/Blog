<!-- resources/views/faq-entries/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Create FAQ Entry</h2>

    <form action="{{ route('faq-entries.store') }}" method="post">
        @csrf
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="question">Question:</label>
        <input type="text" name="question" required>
        <br>
        <label for="answer">Answer:</label>
        <textarea name="answer" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
@endsection
