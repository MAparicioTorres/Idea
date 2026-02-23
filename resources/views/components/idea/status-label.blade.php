@props(['status' => 'pending'])

@php
    $classes = 'inline-block mt-1 rounded-full border px-2 py-1 text-xs font-medium';

    $classes .= match ($status) {
        'pending' => 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20',
        'in_progress' => 'bg-blue-500/10 text-blue-500 border-blue-500/20',
        'completed' => 'bg-green-500/10 text-green-500 border-green-500/20',
    };

@endphp



<div>
    <span {{ $attributes(['class' => $classes]) }}>{{ $slot }}</span>
</div>
