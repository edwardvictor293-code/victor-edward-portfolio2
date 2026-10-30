@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'titleId' => null,
    'level' => 1,
])

<div {{ $attributes->class('section-heading') }}>
    @if ($eyebrow)
        <p class="section-heading__eyebrow">{{ $eyebrow }}</p>
    @endif

    @if ($level === 2)
        <h2 @if ($titleId) id="{{ $titleId }}" @endif class="section-heading__title">
            {{ $title }}
        </h2>
    @elseif ($level === 3)
        <h3 @if ($titleId) id="{{ $titleId }}" @endif class="section-heading__title">
            {{ $title }}
        </h3>
    @else
        <h1 @if ($titleId) id="{{ $titleId }}" @endif class="section-heading__title">
            {{ $title }}
        </h1>
    @endif

    @if ($description)
        <p class="section-heading__description">{{ $description }}</p>
    @endif
</div>
