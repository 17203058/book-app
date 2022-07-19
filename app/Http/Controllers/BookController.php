<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{


    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {

        Book::create([
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
        return redirect('/books');
    }

    public function update(Book $book, Request $request)
    {
        $book->update([
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
        return redirect('/books');
    }



    public function destroy(Request $request)
    {
        $book = Book::find($request['bookid']);
        $book->delete();


        return redirect('/books');
    }

    public function edit(Book $book)
    {
        return view('books/edit', [
            'book' => $book
        ]);
    }


    public function index()
    {
        $books = Book::all();
        return view(
            'books/index',
            [
                'books' => $books
            ]
        );
    }

    public function show(Book $book)
    {
        return view(
            'books/show',
            [
                'book' => $book
            ]
        );
    }
}
