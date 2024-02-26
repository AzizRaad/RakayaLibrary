<x-layout>
    <section class="h-screen">
        <div class="h-full dark:bg-neutral-700">
            <!-- Left column container with background-->
            <div class="g-6 flex h-full flex-wrap items-center justify-center ">
                <!-- Right column container -->
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="relative mb-6">
                            <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold text-white">
                                Register A New Account In Our Library
                            </h4>
                        </div>
                        <!-- User input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Username" />
                            @if ($errors->has('username'))
                                <p class="text-red-500">{{ $errors->first('username') }}</p>
                            @endif
                        </div>

                        <!-- Email input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="email" name="email" id="email"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Email Address" />
                            @if ($errors->has('email'))
                                <p class="text-red-500">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="password" name="password" id="password"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200"
                                placeholder="Password" />
                        </div>
                        @if ($errors->has('password'))
                            <p class="text-red-500">{{ $errors->first('password') }}</p>
                        @endif
                        <!-- Password Confirmation input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear dark:text-neutral-200 "
                                placeholder="Confirm Password" />
                        </div>

                        <!-- Login button -->
                        <div class="text-center lg:text-left">
                            <button type="submit"
                                class="border inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-red-500"
                                data-te-ripple-init data-te-ripple-color="light">
                                Register
                            </button>

                            <!-- Register link -->
                            <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                                Have an account?
                                <a href="{{ route('login') }}"
                                    class="text-blue-500 transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
