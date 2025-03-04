<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = $req['book_name'] .'-' . uniqid() . '.' . $req->file('cover_image')->extension();
        $req->file('cover_image')->storeAs('public/cover_images', $filename);

        $new_book = new Book();
        $new_book->name = $req['book_name'];
        $new_book->author = $req['author'];
        $new_book->status = $req['status'];
        $new_book->cover_image = $filename;

        $new_book->save();
        return redirect('/');
    }

    public function show()
    {
        return view('frontend.home.upload_book');
    }
}
