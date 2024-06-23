@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Entry</h1>
    
    <form action="{{ route('entries.update', $entry->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ $entry->question }}" required>
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control" required>{{ $entry->answer }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
