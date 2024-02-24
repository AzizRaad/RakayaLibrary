<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store(Request $req)
    {
        // $data = $req->all();
        $new_book = new Book();
        $new_book->name = $req['book_name'];
        $new_book->author = $req['author'];
        $new_book->addMediaFromRequest('pdf_book')->toMediaCollection();
        $new_book->save();
        return redirect('/');
    }

    public function show()
    {
        return view('frontend.home.upload_book');
    }
}
