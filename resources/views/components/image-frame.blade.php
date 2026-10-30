@props([
    'src' => null,
    'alt' => '',
    'label' => 'Image placeholder',
    'caption' => 'Portfolio',
    'loading' => 'lazy',
    'fetchpriority' => null,
])

<figure {{ $attributes->class('image-frame') }}>
    @if ($src)
        <img
            class="image-frame__image"
            src="{{ $src }}"
            alt="{{ $alt }}"
            loading="{{ $loading }}"
            decoding="async"
            @if ($fetchpriority) fetchpriority="{{ $fetchpriority }}" @endif
        >
    @else
        <div class="image-frame__placeholder" role="img" aria-label="{{ $label }}">
            <span class="image-frame__monogram" aria-hidden="true">VE</span>
            <p class="image-frame__label">{{ $label }}</p>
        </div>
    @endif
    <figcaption class="image-frame__caption">
        <span>VICTOR EDWARD</span>
        <span>{{ $caption }}</span>
    </figcaption>
</figure>
