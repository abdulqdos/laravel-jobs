<x-layout>
    <x-slot:heading> JOBS</x-slot:heading>
    <div class="space-y-4 mx-16 ">
        @foreach($jobs as $job)
            <a class="cursor-pointer block px-4 py-6 border border-gray-200 rounded-md bg-white"  href="/jobs/{{$job['id']}}">
                <div class="font-bold text-blue-500 text-sm"> {{ $job->employer->name }}</div>
                <div>
                   <strong> Jop: </strong>  {{ $job['name'] }} Salary: {{ $job['salary'] }}
               </div>
            </a>
        @endforeach
        <div> {{ $jobs->links() }}</div>
    </div>
</x-layout>
