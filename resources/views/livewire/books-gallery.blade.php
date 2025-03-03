<div>
    <div class="bg-gradient-to-b from-indigo-50 to-white py-12 mb-8 rounded-3xl">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Welcome to <span class="text-primary">Rakaya</span> Library</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">Discover a world of knowledge with our extensive collection of books. Browse, borrow, and expand your horizons.</p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="#featured-books" class="btn-primary flex items-center">
                    <i class="fas fa-book mr-2"></i> Explore Books
                </a>
                @guest
                    <a href="{{ route('login') }}" class="px-6 py-2 bg-white text-primary border border-primary rounded-lg hover:bg-indigo-50 transition-all duration-200 flex items-center">
                        <i class="fas fa-sign-in-alt mr-2"></i> Sign In
                    </a>
                @endguest
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 mb-12">
        <!-- Success Message -->
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
                <button wire:click="$refresh" class="text-green-700 hover:text-green-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        <!-- Search and Filter Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="w-full md:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input wire:model.live.debounce.300ms="search" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-10 p-3"
                            placeholder="Search by title, author, or genre..." required="">
                    </div>
                </div>

                <div class="w-full md:w-auto flex flex-wrap gap-3">
                    <select wire:model.live="status"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary p-3">
                        <option value="">All Books</option>
                        <option value="available">Available</option>
                        <option value="borrowed">Borrowed</option>
                    </select>

                    <select wire:model.live="sortBy"
                        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary focus:border-primary p-3">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="name">Name (A-Z)</option>
                        <option value="name_desc">Name (Z-A)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Featured Books Section -->
        <div id="featured-books" class="mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Featured Books</h2>
                <div class="text-sm text-gray-500">
                    Showing {{ $books->firstItem() ?? 0 }} - {{ $books->lastItem() ?? 0 }} of {{ $books->total() ?? 0 }} books
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($books as $book)
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-book text-5xl text-gray-400"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-gray-800 line-clamp-1">{{ $book->name }}</h3>
                                @if ($book->status == 'available')
                                    <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                                        Available
                                    </span>
                                @else
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">
                                        Borrowed
                                    </span>
                                @endif
                            </div>
                            <p class="text-gray-600 text-sm mb-3">By {{ $book->author }}</p>

                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">Added: {{ $book->created_at->format('M d, Y') }}</span>
                                @if ($book->status == 'available')
                                    <button wire:click="addToCart({{ $book }})"
                                        class="px-3 py-1 bg-primary text-white rounded-lg hover:bg-secondary transition-colors text-sm">
                                        <i class="fa-solid fa-book-bookmark mr-1"></i>
                                        Borrow
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center">
                        <div class="text-5xl text-gray-300 mb-4">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-600 mb-2">No books found</h3>
                        <p class="text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center">
            {{ $books->links() }}
        </div>
    </div>
</div>
