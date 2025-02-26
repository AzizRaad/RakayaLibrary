<div>
    <section class="py-6">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white relative shadow-sm rounded-xl overflow-hidden">
                <div class="p-4 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Your Invoice</h2>
                    <p class="text-gray-600 mt-1">Books you've selected for checkout</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Book Name</th>
                                <th scope="col" class="px-6 py-3">Author</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 text-gray-900">{{ $invoice->name }}</td>
                                    <td class="px-6 py-4">{{ $invoice->author }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <button wire:click="delete({{ $invoice->id }})"
                                            class="px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                            <i class="fa-solid fa-trash-can mr-1"></i>
                                            Remove
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            
                            @if(count($invoices) == 0)
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                                        No books in your invoice yet. Browse the library to add books.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                
                <div class="p-4 border-t border-gray-200 flex justify-end">
                    <a href="{{ route('download.invoice', auth()->user()->id) }}" 
                       class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors flex items-center">
                        <i class="fa-solid fa-file-arrow-down mr-2"></i>
                        Download Invoice
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
