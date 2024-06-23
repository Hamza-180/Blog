@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Create Entry</h1>
    
    <form action="{{ route('categories.entries.store', $category->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
