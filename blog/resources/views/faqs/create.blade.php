@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New FAQ Entry</div>
                    <div class="card-body">
                        <form action="{{ route('faq_entries.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question" id="question" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <textarea name="answer" id="answer" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
