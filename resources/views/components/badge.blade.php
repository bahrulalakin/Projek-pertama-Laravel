@props(['status'])

@php
    $colorClass = match(strtolower($status)) {
        'aman' => 'bg-green-500 text-white',
        'menipis' => 'bg-yellow-500 text-white',
        'habis' => 'bg-red-500 text-white',
        default => 'bg-gray-500 text-white',
    };
@endphp

<span class="px-2 py-1 text-xs font-bold rounded {{ $colorClass }}">
    {{ $status }}
</span>