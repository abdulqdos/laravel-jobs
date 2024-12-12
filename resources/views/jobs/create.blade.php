<x-layout>
    <x-slot:heading> Create </x-slot:heading>
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800">
                    Profile
                </h2>
                <p class="text-sm text-gray-600">
                    Manage your name, password and account settings.
                </p>
            </div>

            <form method="post" action="/jobs">
                @csrf
                    <div class="sm:col-span-3">
                       <x-form-label for="title"> Job Title </x-form-label>
                    </div>

                    <div class="sm:col-span-9">
                        <x-form-input id="title" type="text" placeholder="Maria" name="name"></x-form-input>
                    </div>

                <x-form-error name="name"></x-form-error>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <x-form-label for="Salary"> Salary </x-form-label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-form-input id="salary" type="text" placeholder="30,000,000 per year" name="salary"></x-form-input>
                    </div>
                    <x-form-error name="salary"></x-form-error>
                    <!-- End Col -->

                    <div class="sm:col-span-3 my-3"></div><!-- End Col -->

                    <div class="sm:col-span-9">
                        <x-form-button type="submit" >Create Job</x-form-button>

                    </div>
                    <!-- End Col -->
            </form>
        </div><!-- End Card -->
    </div><!-- End Card Section -->
</x-layout>
