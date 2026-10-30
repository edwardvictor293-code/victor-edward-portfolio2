@props([
    'eyebrow' => null,
    'title' => null,
    'glass' => false,
    'level' => 3,
])

<article {{ $attributes->class(['card', 'card--glass' => $glass]) }}>
    @if ($eyebrow)
        <p class="card__eyebrow">{{ $eyebrow }}</p>
    @endif

    @if ($title)
        @if ($level === 2)
            <h2 class="card__title">{{ $title }}</h2>
        @else
            <h3 class="card__title">{{ $title }}</h3>
        @endif
    @endif

    <div class="card__body">{{ $slot }}</div>
</article>
