<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        $books = Book::all();
        return view('admin.books.list')->with('books', $books);
    }
}
