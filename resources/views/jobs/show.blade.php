<x-layout>
    <x-slot:heading> JOPS</x-slot:heading>
    <div>
        <p> <strong>  {{ $job['name'] }} </strong> </p>
        <p class="mb-4">Salary: {{ $job['salary'] }} </p>
        <div class="flex flex-row justify-between mx-4">
            @can('edit' , $job)
            <x-button href="/jobs/{{$job['id']}}/edit" >Edit Job</x-button>
            <button form="deleteForm" class="p-3 bg-red-500 text-white rounded-md hover:bg-red-700 transition duration-300">Delete</button>
            @endcan
        </div>
    </div>

    <form action="/jobs/{{$job['id']}}" method="post" id="deleteForm" onsubmit="alert('are u sure to delete this')">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
