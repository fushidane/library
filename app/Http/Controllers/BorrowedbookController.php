<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Borrowedbook;
use Illuminate\Http\Request;

class BorrowedbookController extends Controller
{
    public function index()
    {
        $bd = Borrowedbook::orderBy('id')->get();

        return view('borrowedbook.index', ['borrowedbooks' => $bd]);
    }
//
    public function create() {

        $book = Book::list();
        return view('borrowedbook.create', ['books' => $book]);
    }
//
    public function store(Request $request) {

        $request->validate([
            'book_id' => 'required|numeric',
            'borrowed_date' => 'required',
            'return_date' => 'required',
        ]);

        Borrowedbook::create([
            'book_id' => $request->book_id,
            'borrowed_date' => $request->borrowed_date,
            'return_date' => $request->return_date,
        ]);

        return redirect('/borrowedbooks')->with('message', 'A user borrow book successfully');
    }
//
    public function edit(Borrowedbook $borrowedbook) {

        return view('borrowedbook.edit',compact('borrowedbook'));
    }

    public function update(Borrowedbook $borrowedbook, Request $request) {

        $request->validate([
            'borrowed_date' => 'required',
            'return_date' => 'required',
        ]);

        $borrowedbook->update($request->all());
        return redirect('/borrowedbooks')->with('message', " $borrowedbook->borrowed_date has been updated successfully");
    }

    public function delete(Borrowedbook $borrowedbook)
    {
        $borrowedbook->delete();

        return redirect('/borrowedbooks')->with('message', " $borrowedbook->borrowed_date has been deleted successfully");
    }


}
