<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;

class InvoiceTable extends Component
{
    public function delete(Invoice $invoice) {
        $invoice->delete();
    }

    public function render()
    {
        return view('livewire.invoice-table',[
            'invoices' => Invoice::all()->where('user_id',auth()->user()->id),
        ]);
    }
}
