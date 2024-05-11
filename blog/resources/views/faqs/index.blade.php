@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">FAQ Entries</div>
                    <div class="card-body">
                        <a href="{{ route('faq_entries.create') }}" class="btn btn-success mb-2">Create New FAQ Entry</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entries as $entry)
                                    <tr>
                                        <td>{{ $entry->category->name }}</td>
                                        <td>{{ $entry->question }}</td>
                                        <td>{{ $entry->answer }}</td>
                                        <td>
                                            <form action="{{ route('faq_entries.destroy',$entry->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('faq_entries.edit',$entry->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
