<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function books()
    {

        $json = File::get(public_path('books.json'));

        $books = json_decode($json, true);

        return view('books', compact('books'));
    }

    public function bookDetails($id)
    {
        $json = File::get(public_path('books.json'));

        $books = json_decode($json, true);

        $book = collect($books)->firstWhere('id', $id);

        if (!$book) {
            abort(404, 'Book not found.');
        }

        return view('book_details', compact('book'));
    }

}
