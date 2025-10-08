@props(['href' => '#', 'active' => false, 'type' => 'a'])

@php
    $classes = $active
        ? 'text-blue-600 font-semibold'
        : 'text-gray-700 hover:text-blue-600';
@endphp

@if ($type === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@elseif ($type === 'button')
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
