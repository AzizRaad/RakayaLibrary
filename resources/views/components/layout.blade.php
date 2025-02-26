<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RakayaLibrary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#6366F1',
                        accent: '#818CF8',
                        light: '#F9FAFB',
                        dark: '#1F2937',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Roboto, sans-serif;
            background-color: #F9FAFB;
        }
        .nav-link {
            @apply px-4 py-2 rounded-lg transition-all duration-200 hover:bg-indigo-50 hover:text-primary;
        }
        .btn-primary {
            @apply bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-all duration-200;
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('uploadbookform.css') }}"> --}}
</head>

<body class="flex flex-col min-h-screen">

    @auth
        <header class="bg-white shadow-sm">
            <!-- Navigation bar -->
            <nav class="container mx-auto flex items-center justify-between py-4 px-6 lg:px-8"
                data-te-navbar-ref>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-xl font-bold text-primary">RakayaLibrary</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button
                        class="text-gray-600 hover:text-primary focus:outline-none"
                        type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                        aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation links -->
                <div class="hidden lg:flex items-center space-x-2"
                    id="navbarSupportedContentY" data-te-collapse-item>
                    <a class="nav-link" href="/" data-te-nav-link-ref>Home</a>
                    <a class="nav-link" href="{{ route('invoice') }}" data-te-nav-link-ref>View Invoice</a>
                    @if (Auth::user()->isAdmin())
                        <a class="nav-link" href="{{ route('upload.book') }}" data-te-nav-link-ref>Upload Book</a>
                    @endif
                    <a class="nav-link bg-red-50 text-red-600 hover:bg-red-100" href="{{ route('logout') }}" data-te-nav-link-ref>Sign Out</a>
                </div>
            </nav>
            
            <!-- Mobile menu (hidden by default) -->
            <div class="lg:hidden hidden" id="navbarSupportedContentY">
                <div class="px-4 py-3 space-y-2">
                    <a class="block nav-link" href="/">Home</a>
                    <a class="block nav-link" href="{{ route('invoice') }}">View Invoice</a>
                    @if (Auth::user()->isAdmin())
                        <a class="block nav-link" href="{{ route('upload.book') }}">Upload Book</a>
                    @endif
                    <a class="block nav-link bg-red-50 text-red-600 hover:bg-red-100" href="{{ route('logout') }}">Sign Out</a>
                </div>
            </div>
        </header>
    @else
        <header class="bg-white shadow-sm">
            <!-- Navigation bar -->
            <nav class="container mx-auto flex items-center justify-between py-4 px-6 lg:px-8"
                data-te-navbar-ref>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-xl font-bold text-primary">RakayaLibrary</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button
                        class="text-gray-600 hover:text-primary focus:outline-none"
                        type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                        aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation links -->
                <div class="hidden lg:flex items-center space-x-2"
                    id="navbarSupportedContentY" data-te-collapse-item>
                    <a class="nav-link" href="/" data-te-nav-link-ref>Home</a>
                    <a class="nav-link bg-primary text-white hover:bg-secondary" href="{{ route('login') }}" data-te-nav-link-ref>Sign In</a>
                </div>
            </nav>
            
            <!-- Mobile menu (hidden by default) -->
            <div class="lg:hidden hidden" id="navbarSupportedContentY">
                <div class="px-4 py-3 space-y-2">
                    <a class="block nav-link" href="/">Home</a>
                    <a class="block nav-link bg-primary text-white hover:bg-secondary" href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </header>
    @endauth
    <!-- header ends here -->
    
    <main class="flex-grow container mx-auto px-6 py-8 lg:px-8">
        {{ $slot }}
    </main>

    <!-- footer begins -->
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="container mx-auto px-6 py-6 lg:px-8 text-center text-gray-600">
            <p>Copyright &copy; 2024 <a href="/" class="text-primary hover:text-secondary transition-colors">RakayaLibrary</a>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add JavaScript for mobile menu toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[data-te-target="#navbarSupportedContentY"]');
            const mobileMenu = document.getElementById('navbarSupportedContentY');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>

</html>
