@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to the Bookstore!</h1>
    <p class="lead">Find your favorite books and explore new genres.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('books') }}" role="button">Browse Books</a>
</div>
@endsection
