<x-layout>
    <section class="py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
                    <p class="text-gray-600 mt-2">Sign in to your account</p>
                </div>
                
                @if (session()->has('failure'))
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                        <p>{{ session('failure') }}</p>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Username input -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input 
                            type="text" 
                            name="username" 
                            id="username"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                            placeholder="Enter your username" 
                        />
                    </div>

                    <!-- Password input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                            placeholder="Enter your password" 
                        />
                    </div>

                    <!-- Login button -->
                    <div>
                        <button 
                            type="submit"
                            class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-secondary transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                        >
                            Sign In
                        </button>
                    </div>

                    <!-- Register link -->
                    <div class="text-center text-sm">
                        <p class="text-gray-600">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="font-medium text-primary hover:text-secondary transition-colors">
                                Register now
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
