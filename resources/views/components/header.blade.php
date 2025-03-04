@auth
    <header class="bg-white shadow-md">
        <div class="container mx-auto">
            <!-- Navigation bar -->
            <nav class="flex items-center justify-between py-4 px-6 lg:px-8">
                <div class="flex items-center">
                    <a href="/"
                        class="text-2xl font-bold text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                        <i class="fas fa-book-open mr-2"></i>
                        <span>RakayaLibrary</span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Navigation links - Desktop -->
                <div class="hidden lg:flex items-center space-x-3">
                    <a class="nav-link flex items-center" href="/">
                        <i class="fas fa-home mr-1"></i> Home
                    </a>
                    <a class="nav-link flex items-center" href="{{ route('invoice') }}">
                        <i class="fas fa-file-invoice mr-1"></i> View Invoice
                    </a>
                    @if (auth()->user()->hasRole('admin'))
                        <a class="nav-link flex items-center" href="{{ route('upload.book') }}">
                            <i class="fas fa-upload mr-1"></i> Upload Book
                        </a>
                        <a class="nav-link flex items-center" href="/superadmin">
                            <i class="fas fa-user-cog mr-1"></i> Admin Dashboard
                        </a>
                    @endif
                    <a class="btn-primary flex items-center ml-2" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt mr-1"></i> Sign Out
                    </a>
                </div>
            </nav>

            <!-- Mobile menu - Authenticated -->
            <div id="mobile-menu" class="lg:hidden hidden px-6 pb-4">
                <div class="flex flex-col space-y-3">
                    <a class="nav-link flex items-center py-2" href="/">
                        <i class="fas fa-home mr-1"></i> Home
                    </a>
                    <a class="nav-link flex items-center py-2" href="{{ route('invoice') }}">
                        <i class="fas fa-file-invoice mr-1"></i> View Invoice
                    </a>
                    @if (auth()->user()->hasRole('admin'))
                        <a class="nav-link flex items-center py-2" href="{{ route('upload.book') }}">
                            <i class="fas fa-upload mr-1"></i> Upload Book
                        </a>
                        <a class="nav-link flex items-center py-2" href="/superadmin">
                            <i class="fas fa-user-cog mr-1"></i> Admin Dashboard
                        </a>
                    @endif
                    <a class="btn-primary flex items-center justify-center py-2 mt-2" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt mr-1"></i> Sign Out
                    </a>
                </div>
            </div>
        </div>
    </header>
@else
    <header class="bg-white shadow-md">
        <div class="container mx-auto">
            <!-- Navigation bar -->
            <nav class="flex items-center justify-between py-4 px-6 lg:px-8">
                <div class="flex items-center">
                    <a href="/"
                        class="text-2xl font-bold text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                        <i class="fas fa-book-open mr-2"></i>
                        <span>RakayaLibrary</span>
                    </a>
                </div>

                 <!-- Mobile menu button - Guest -->
                 <div class="lg:hidden">
                    <button id="mobile-menu-button-guest" class="text-gray-500 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Navigation links - Desktop -->
                <div class="hidden lg:flex items-center space-x-3">
                    {{-- <a class="nav-link flex items-center" href="/">
                        <i class="fas fa-home mr-1"></i> Home
                    </a> --}}
                    <a class="btn-primary flex items-center ml-2" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt mr-1"></i> Sign In
                    </a>
                </div>
            </nav>


            <!-- Mobile menu - Guest -->
            <div id="mobile-menu-guest" class="lg:hidden hidden px-6 pb-4">
                <div class="flex flex-col space-y-3">
                    <a class="btn-primary flex items-center justify-center py-2 mt-2" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt mr-1"></i> Sign In
                    </a>
                </div>
            </div>
        </div>
    </header>
@endauth

<script>
    // Mobile menu toggle for authenticated users
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Mobile menu toggle for guests
        const mobileMenuButtonGuest = document.getElementById('mobile-menu-button-guest');
        const mobileMenuGuest = document.getElementById('mobile-menu-guest');

        if (mobileMenuButtonGuest && mobileMenuGuest) {
            mobileMenuButtonGuest.addEventListener('click', function() {
                mobileMenuGuest.classList.toggle('hidden');
            });
        }
    });
</script>
