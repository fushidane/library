<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::orderBy('id')->get();

        return view('book.index', ['books' => $book]);
    }

    public function create() {

        $user = User::list();
        return view('book.create', ['users' => $user]);
    }

    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);

        Book::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
        ]);

        return redirect('/books')->with('message', 'A new book has been added');
    }

    // edit and delete

    public function edit(Book $book) {

        return view('book.edit',compact('book'));
    }

    public function update(Book $book, Request $request) {

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);

        $book->update($request->all());
        return redirect('/books')->with('message', " $book->title has been updated successfully");
    }

    public function delete(Book $book)
    {
        $book->delete();

        return redirect('/books')->with('message', " $book->title has been deleted successfully");
    }




    // public function create() {

    //     $user = User::list();
    //     return view('book.create', ['users' => $user]);
    // }
}
