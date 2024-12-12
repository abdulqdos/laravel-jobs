<x-layout>
    <x-slot:heading> login </x-slot:heading>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        @if (session('error'))
            <div id="alert" class="fixed top-0 right-0 m-6 bg-red-500 text-white p-4 rounded-lg shadow-md flex items-center space-x-4" role="alert">
                <span>{{ session('error') }}</span>
                <button onclick="document.getElementById('alert').style.display = 'none'" class="ml-4 text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        @endif
        <div class="bg-white rounded-xl shadow p-4 sm:p-7">
            <form method="post" action="/login">
                @csrf
                <!-- Email -->
                <div class="sm:col-span-3 mt-4">
                    <x-form-label for="email"> Email Address </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="email" type="email" placeholder="example@example.com" name="email" value=" {{ old('email') }}" required></x-form-input>
                </div>
                <x-form-error name="email"></x-form-error>
                <!-- End Email -->

                <!-- Password -->
                <div class="sm:col-span-3 mt-4">
                    <x-form-label for="password"> Password </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="password" type="password" placeholder="••••••••" name="password" required></x-form-input>
                </div>
                <x-form-error name="password"></x-form-error>
                <!-- End Password -->

                <!-- Submit Button -->
                <div class="sm:col-span-3 my-3"></div>
                <div class="sm:col-span-9 flex gap-4">
                    <a href="/" class="px-3 py-1 text-white rounded-md bg-gray-400 hover:bg-gray-600 transition duration-300"> Back </a>
                    <x-form-button type="submit">Log in</x-form-button>
                </div>
                <!-- End Submit Button -->
            </form>
        </div><!-- End Card -->
    </div><!-- End Card Section -->
</x-layout>
