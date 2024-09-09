@extends('layouts.app')

@section('title', 'Books')

@section('content')
<h1 class="mb-4">Books</h1>

@if (count($books) > 0)
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset($book['image']) }}" class="card-img-top img-fluid book-image" alt="{{ $book['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-2">{{ $book['title'] }}</h5>
                        <p class="card-text mb-3"><strong>Author:</strong> {{ implode(', ', $book['authors']) }}</p>
                        <p class="card-text mb-3"><strong>Description:</strong> {{ Str::limit($book['description'], 100, '...') }}</p>
                        <a href="{{ route('book.details', $book['id']) }}" class="btn btn-primary mt-auto">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No books available.</p>
@endif
@endsection

@section('styles')
<style>
    .book-image {
        height: 200px;
        object-fit: cover;
    }
</style>
@endsection
