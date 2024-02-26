<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RakayaLibrary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('uploadbookform.css') }}"> --}}
</head>

<body>

    @auth
        <header>
            <!-- Navigation bar -->
            <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
                data-te-navbar-ref>
                <div class="flex w-full flex-wrap items-center justify-between px-3">
                    <div class="flex items-center">
                        <!-- Hamburger menu button -->
                        <button
                            class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                            aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- Hamburger menu icon -->
                            <span class="[&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <!-- Navigation links -->
                    <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
                        id="navbarSupportedContentY" data-te-collapse-item>
                        <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="/" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Home</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="{{ route('invoice') }}" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">View Invoice</a>
                            </li>
                            @if (Auth::user()->isAdmin())
                                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                        href="{{ route('upload.book') }}" data-te-nav-link-ref data-te-ripple-init
                                        data-te-ripple-color="light">Upload-A-Book</a>
                                </li>
                            @endif
                            <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="{{ route('logout') }}" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">SignOut</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <!-- Navigation bar -->
            <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-center"
                data-te-navbar-ref>
                <div class="flex w-full flex-wrap items-center justify-between px-3">
                    <div class="flex items-center">
                        <!-- Hamburger menu button -->
                        <button
                            class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                            aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- Hamburger menu icon -->
                            <span class="[&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <!-- Navigation links -->
                    <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
                        id="navbarSupportedContentY" data-te-collapse-item>
                        <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="/" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Home</a>
                            </li>
                            <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="{{ route('login') }}" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Sign-In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @endauth
    <!-- header ends here -->
    <div class="bg-neutral-50 px-6 py-20 text-center text-neutral-800 dark:bg-neutral-700 dark:text-neutral-200">
        {{ $slot }}
    </div>

    <!-- footer begins -->
    <footer class="bg-neutral-50 px-6 py-20 text-center text-neutral-800 dark:bg-neutral-700 dark:text-neutral-200">
        <p class="m-0">Copyright &copy; 2024 <a href="/" class="text-muted">RakayaLibrary</a>. All rights
            reserved.
        </p>
    </footer>

</body>

</html>
