<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class BooksTable extends Component
{

    use WithPagination;

    public $search = '';
    public $perPage = 5;

    public $status = '';

    public function addToCart(Book $book){
        $invoice = new Invoice();
        $invoice->name = $book->name;
        $invoice->author = $book->author;
        $invoice->user_id = auth()->user()->id;
        $invoice->save();

        $book_status = Book::find($book->id);
        $book_status->status = 'Borrowed';
        $book_status->save();
        session()->flash('success',' Book Added to your Invoice ');
    }

    public function render()
    {
        return view('livewire.books-table', [
            'books' => Book::search($this->search)
                ->when($this->status != '',function($query){
                    $query->where('status',$this->status);
                })
                ->paginate($this->perPage)
        ]);
    }
}
