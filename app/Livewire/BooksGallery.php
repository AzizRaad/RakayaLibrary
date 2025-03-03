<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class BooksGallery extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';
    public $sortBy = 'newest';
    public $perPage = 10;

    public function addToCart(Book $book)
    {
        $invoice = new Invoice();
        $invoice->name = $book->name;
        $invoice->author = $book->author;
        $invoice->user_id = auth()->user()->id;
        $invoice->book_id = $book->id;
        $invoice->save();

        $book_status = Book::find($book->id);
        $book_status->status = 'borrowed';
        $book_status->save();
        session()->flash('success', 'Book Added to your Invoice');
    }

    public function render()
    {
        // Main books query with search and status filter
        $booksQuery = Book::search($this->search)
            ->when($this->status != '', function ($query) {
                $query->where('status', $this->status);
            });

        // Apply sorting
        switch ($this->sortBy) {
            case 'newest':
                $booksQuery->latest();
                break;
            case 'oldest':
                $booksQuery->oldest();
                break;
            case 'name':
                $booksQuery->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $booksQuery->orderBy('name', 'desc');
                break;
            default:
                $booksQuery->latest();
        }

        // Get paginated books
        $books = $booksQuery->paginate($this->perPage);


        return view('livewire.books-gallery', [
            'books' => $books,
        ]);
    }
}
