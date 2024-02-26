<x-layout>
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <section class="h-screen">
        <div class="h-full dark:bg-neutral-700">
            <!-- Left column container with background-->
            <div class="g-6 flex h-full flex-wrap items-center justify-center ">
                <!-- Right column container -->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="relative mb-6">
                            <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold text-white">
                                Sign In to Your Account !
                            </h4>
                        </div>
                        @if (session()->has('failure'))
                            <div
                                class="block w-full rounded-lg bg-danger text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-red-700">
                                <div class="p-6">
                                    <p class="text-base text-neutral-600 dark:text-neutral-200">
                                        {{ session('failure') }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        <br>
                        <!-- Email input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="username" id="username"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Username" />
                        </div>

                        <!-- Password input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="password" name="password" id="password"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Password" />
                        </div>

                        <!-- Login button -->
                        <div class="text-center lg:text-left">
                            <button type="submit"
                                class="border inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white"
                                data-te-ripple-init data-te-ripple-color="light">
                                Login
                            </button>

                            <!-- Register link -->
                            <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                                Don't have an account?
                                <a href="{{ route('register') }}"
                                    class="text-red-500 transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
