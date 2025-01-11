<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getIndex () {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function getOne (Book $book) {
        return view('book', compact('book'));
    }

    public function postOrder (Book $book, Request $request) {
        dd($book, $request->all());
    }
}
