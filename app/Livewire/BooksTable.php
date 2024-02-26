<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BooksTable extends Component
{

    use WithPagination;

    public $search = '';
    public $perPage = 5;

    public $status = '';

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
