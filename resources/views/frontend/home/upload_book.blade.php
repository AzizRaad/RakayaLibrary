<x-layout>
    <section class="py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Upload a Book</h2>
                    <p class="text-gray-600 mt-2">Add a new book to the library</p>
                </div>
                
                <form method="POST" action="{{ route('upload.book') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Book Name input -->
                    <div>
                        <label for="book_name" class="block text-sm font-medium text-gray-700 mb-1">Book Name</label>
                        <input 
                            type="text" 
                            name="book_name" 
                            id="book_name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                            placeholder="Enter book title" 
                        />
                    </div>

                    <!-- Author input -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                        <input 
                            type="text" 
                            name="author" 
                            id="author"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                            placeholder="Enter author name" 
                        />
                    </div>

                    <!-- Status select -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select
                            name="status" 
                            id="status"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                        >
                            <option value="Available">Available</option>
                            <option value="Borrowed">Borrowed</option>
                        </select>
                    </div>

                    <!-- Upload button -->
                    <div>
                        <button 
                            type="submit"
                            class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-secondary transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                        >
                            Upload Book
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
