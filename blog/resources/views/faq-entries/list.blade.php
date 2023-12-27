<!-- resources/views/faq-entries/list.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>FAQ Entries</h2>

    <ul>
        @foreach($entries as $entry)
            <li>
                {{ $entry->question }} - <a href="{{ route('faq-entries.edit', $entry->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('faq-entries.create') }}">Create New Entry</a>
@endsection
