<x-layout>
    <section class="h-screen">
        <div class="h-full dark:bg-neutral-700">
            <!-- Left column container with background-->
            <div class="g-6 flex h-full flex-wrap items-center justify-center ">
                <!-- Right column container -->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                    <form method="POST" action="{{ route('upload.book') }}">
                        @csrf
                        <div class="relative mb-6">
                            <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold text-white">
                                Upload A New Book To The Library
                            </h4>
                        </div>
                        <!-- Book info -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="book_name" id="book_name"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Book Name" />
                        </div>

                        <!-- Author info -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="author" id="author"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="author" />
                        </div>

                        <!-- Status info -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <select
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                name="status" id="status" data-te-select-init>
                                <option value="Available">Available</option>
                                <option value="Borrowed">Borrowed</option>
                            </select>
                        </div>

                        <!-- Login button -->
                        <div class="text-center lg:text-left">
                            <button type="submit"
                                class="border inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white"
                                data-te-ripple-init data-te-ripple-color="light">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <form action="/uploadform" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Sign Up</h1>

        <fieldset>

            <legend><span class="number">1</span> Your basic info</legend>

            <label for="book_name">Book Name:</label>
            <input type="text" id="book_name" name="book_name">

            <label for="author">Author:</label>
            <input type="text" id="author" name="author">

            <br>

            <select name="status" id="status">
                <option value="Available">Available</option>
                <option value="Borrowed">Borrowed</option>
            </select>

        </fieldset>

        <button type="submit">Upload</button>

    </form>
</x-layout>
