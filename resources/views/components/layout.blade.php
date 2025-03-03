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

        <!-- Include the header component -->
        <x-header />

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
