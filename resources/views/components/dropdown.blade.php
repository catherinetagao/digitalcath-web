@props(['label'])

<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center text-gray-700 hover:text-blue-600 focus:outline-none">
        {{ $label }}
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" @click.away="open = false"
         x-transition
         class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-lg py-2 z-50">
        {{ $slot }}
    </div>
</div>
