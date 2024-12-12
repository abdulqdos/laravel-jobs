<button {{ $attributes->merge(['class' => "inline-flex items-center justify-center py-2 px-6 text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"]) }}>
    {{ $slot }}
</button>
