@props(['name'])
<div class="sm:flex">
    <input {{ $attributes->merge(['class' => "py-2 px-3 pe-11 block w-full border-gray-400 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" . ($errors->has($name) ? ' border border-red-500' : '')]) }}  name="{{$name}}"  >
</div>
