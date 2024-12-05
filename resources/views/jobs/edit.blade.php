<x-layout>
    <x-slot:heading> Edit </x-slot:heading>
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

            <form method="post" action="/jobs/{{$job->id}}">
                @csrf
                @method('PATCH')
                <div class="sm:col-span-3">
                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                        Job Title
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <input id="af-account-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-400 shadow-sm -mt-px -ms-px first:rounded-t-lg  last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none @error('name') {{'border border-red-500' }}@enderror " placeholder="Maria" name="name" value="{{ $job['name'] }}">
                    </div>
                </div>
                @error('name')
                <p class="text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                @enderror
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="salary" class="inline-block text-sm text-gray-800 mt-2.5">
                        Salalry
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="salary" type="text" class="py-2 px-3 pe-11 block w-full border-gray-400 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none @error('salary') {{   'border border-red-500' }}  @enderror" placeholder="30,000,00 per year" name="salary" value="{{ $job['salary'] }}">
                </div>
                <!-- End Col -->
                @error('salary')
                <p class="text-red-500 font-semibold italic mt-2">{{ $message }}</p>
                @enderror
                <div class="sm:col-span-3 my-3"></div><!-- End Col -->

                <div class="sm:col-span-9">
                    <button type="submit" class="inline-flex items-center justify-center py-2 px-6 text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Edit Job
                    </button>
                </div>
                <!-- End Col -->
            </form>
        </div><!-- End Card -->
    </div><!-- End Card Section -->

</x-layout>
