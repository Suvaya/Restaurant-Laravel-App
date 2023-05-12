@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-bold text-indigo-600 md:text-2xl hover:text-indigo-700'
            : 'inline-flex items-center px-1 pt-1 text-sm font-bold text-indigo-600 md:text-2xl hover:text-indigo-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
