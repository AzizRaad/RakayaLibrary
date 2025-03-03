<div>
    <section class="py-6">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white relative shadow-sm rounded-xl overflow-hidden">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between p-4 border-b border-gray-200">
                    <div class="w-full md:w-1/3 mb-4 md:mb-0">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-10 p-2.5"
                                placeholder="Search books..." required="">
                        </div>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        @if (session()->has('success'))
                            <div class="px-4 py-2 bg-green-100 border border-green-200 text-green-700 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="w-full md:w-auto mt-4 md:mt-0">
                        <div class="flex items-center">
                            <label class="mr-2 text-sm font-medium text-gray-700">Book Status:</label>
                            <select wire:model.live="status"
                                class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary p-2.5">
                                <option value="">All</option>
                                <option value="Available">Available</option>
                                <option value="Borrowed">Borrowed</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">Book name</th>
                                <th scope="col" class="px-4 py-3">Author</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Created</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr wire:key="{{ $book->id }}" class="border-b hover:bg-gray-50">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $book->name }}</th>
                                    <td class="px-4 py-3">{{ $book->author }}</td>

                                    @if ($book->status == 'available')
                                        <td class="px-4 py-3">
                                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                                                {{ $book->status }}
                                            </span>
                                        </td>
                                    @else
                                        <td class="px-4 py-3">
                                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">
                                                {{ $book->status }}
                                            </span>
                                        </td>
                                    @endif
                                    <td class="px-4 py-3">{{ $book->created_at }}</td>

                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button wire:click="addToCart({{ $book }})"
                                            class="px-3 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors">
                                            <i class="fa-solid fa-book-bookmark mr-1"></i>
                                            Add
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <label class="mr-2 text-sm font-medium text-gray-700">Per Page:</label>
                            <select wire:model.live="perPage"
                                class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary p-2.5">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        
                        <div>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
