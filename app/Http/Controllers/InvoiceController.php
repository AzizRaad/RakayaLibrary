<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function show()
    {
        return view('frontend.home.invoice.invoice_cart');
    }

    public function store($id)
    {
        $borrowed_books = Invoice::all()
            ->where('user_id', $id);

        $pdf =  Pdf::loadView('frontend.home.invoice.borrow_invoice', compact('borrowed_books'))
            ->setPaper('a4')->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path()
            ]);
        return $pdf->download('invoice.pdf');
    }
}
