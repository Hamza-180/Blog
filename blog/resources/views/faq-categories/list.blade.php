
@extends('layouts.app')

@section('content')
    <h2>FAQ Categories</h2>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }} - <a href="{{ route('faq-categories.edit', $category->id) }}">Edit</a></li>
        @endforeach
    </ul>

    <a href="{{ route('faq-categories.create') }}">Create New Category</a>
@endsection
