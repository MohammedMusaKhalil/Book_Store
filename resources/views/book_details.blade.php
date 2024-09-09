@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="row">
    <div class="col-md-4">
            <img src="{{ asset($book['image']) }}" class="img-fluid" alt="Default Image">
    </div>
    <div class="col-md-8">
        <h1>{{ $book['title'] }}</h1>
        <p><strong>Author(s):</strong> {{ implode(', ', $book['authors'] ?? ['Unknown']) }}</p>
        <p><strong>Description:</strong> {{ $book['description'] ?? 'No description available.' }}</p>
        <p><strong>Published Date:</strong> {{ $book['publishedDate'] ?? 'Unknown' }}</p>
    </div>
</div>
@endsection
