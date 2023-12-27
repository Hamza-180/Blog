<!-- resources/views/faq-entries/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit FAQ Entry</h2>

    <form action="{{ route('faq-entries.update', $entry->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id === $entry->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="question">Question:</label>
        <input type="text" name="question" value="{{ $entry->question }}" required>
        <br>
        <label for="answer">Answer:</label>
        <textarea name="answer" required>{{ $entry->answer }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
