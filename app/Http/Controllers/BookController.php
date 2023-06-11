<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.books.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $book = new Book();

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->status = 'Tersedia';
        $book->category_id = $request->input('category_id');
        $book->image = $request->input('image');
        $book->description = $request->input('description');
        $title = $request->input('title');
        $book->slug = Str::slug($title)::slug($book->title);

        $book->save();

        return redirect('/books');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
