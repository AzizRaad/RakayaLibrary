<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Invoice;
use Livewire\Component;

class InvoiceTable extends Component
{
    public function delete(Invoice $invoice) {
        $book = Book::find($invoice->book_id);
        $book->status = 'available';
        $book->save();
        $invoice->delete();
        session()->flash('success',' Book Deleted Successfully ');
    }

    public function render()
    {
        return view('livewire.invoice-table',[
            'invoices' => Invoice::all()->where('user_id',auth()->user()->id),
        ]);
    }
}
