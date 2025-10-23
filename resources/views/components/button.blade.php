@props([
    'disable' => false, 
    'bg' => 'dark',
    'href' => '#',
    ])

<a href="{{ $href }}" class="btn btn-{{ $bg }}" {{ $disable ? 'disabled' : '' }}>
    {{ $slot }}
</a>