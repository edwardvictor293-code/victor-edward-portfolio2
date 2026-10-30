@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@if ($href)
    <a {{ $attributes->class(['button', 'button--'.$variant]) }} href="{{ $href }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->class(['button', 'button--'.$variant]) }} type="{{ $type }}">
        {{ $slot }}
    </button>
@endif
