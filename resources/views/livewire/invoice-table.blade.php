<div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">BookName</th>
                                <th scope="col" class="px-6 py-4">Author</th>
                                <th scope="col" class="px-6 py-4">Remove Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $invoice->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $invoice->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $invoice->author }}</td>
                                    <td class="px-6 py-4">
                                        <button wire:click="delete({{ $invoice->id }})"
                                            class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <button class="px-3 py-1 bg-yellow-600 text-white rounded">
        <a href="{{ route('download.invoice',auth()->user()->id) }}">
            <i class="fa-solid fa-file-arrow-down"></i>
            Download Invoice
        </a>
    </button>
</div>
