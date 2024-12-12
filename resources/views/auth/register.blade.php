<x-layout>
    <x-slot:heading> Register </x-slot:heading>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7">
            <form method="post" action="/register">
                @csrf
                <!-- First Name -->
                <div class="sm:col-span-3">
                    <x-form-label for="firstName"> First Name </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="firstName" type="text" placeholder="John" name="firstName" required></x-form-input>
                </div>
                <x-form-error name="firstName"></x-form-error>
                <!-- End First Name -->

                <!-- Last Name -->
                <div class="sm:col-span-3 mt-4">
                    <x-form-label for="lastName"> Last Name </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="lastName" type="text" placeholder="Doe" name="lastName" required></x-form-input>
                </div>
                <x-form-error name="lastName"></x-form-error>
                <!-- End Last Name -->

                <!-- Email -->
                <div class="sm:col-span-3 mt-4">
                    <x-form-label for="email"> Email Address </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="email" type="email" placeholder="example@example.com" name="email" required></x-form-input>
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

                <!-- Confirm Password -->
                <div class="sm:col-span-3 mt-4">
                    <x-form-label for="password_confirmation"> Confirm Password </x-form-label>
                </div>
                <div class="sm:col-span-9">
                    <x-form-input id="password_confirmation" type="password" placeholder="••••••••" name="password_confirmation" required></x-form-input>
                </div>
                <x-form-error name="password_confirmation"></x-form-error>
                <!-- End Confirm Password -->

                <!-- Submit Button -->
                <div class="sm:col-span-3 my-3"></div>
                <div class="sm:col-span-9 flex gap-4">
                    <a href="/" class="px-3 py-1 text-white rounded-md bg-gray-400 hover:bg-gray-600 transition duration-300"> Back </a>
                    <x-form-button type="submit">Register</x-form-button>
                </div>
                <!-- End Submit Button -->
            </form>
        </div><!-- End Card -->
    </div><!-- End Card Section -->
</x-layout>
