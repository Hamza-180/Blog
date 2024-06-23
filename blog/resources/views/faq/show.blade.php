@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">FAQ Entry Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" id="category" class="form-control" value="{{ $faq_entry->category->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" name="question" id="question" class="form-control" value="{{ $faq_entry->question }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <textarea name="answer" id="answer" class="form-control" rows="3" disabled>{{ $faq_entry->answer }}</textarea>
                        </div>
                        <a href="{{ route('faq_entries.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
