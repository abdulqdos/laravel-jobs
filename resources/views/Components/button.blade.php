@props(['active' => false ])
<a {{ $attributes->merge(['class' => "p-3 bg-white hover:bg-gray-100 border border-gray-700 transition duration-300 rounded-md text-gray-700"]) }}> {{ $slot }}</a>
