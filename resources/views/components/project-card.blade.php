@props([
    'number',
    'title',
    'description',
    'status',
    'imageLabel',
    'technologies' => [],
    'githubUrl' => null,
    'demoUrl' => null,
])

<article {{ $attributes->class('project-card') }}>
    <x-image-frame
        class="project-card__image"
        :label="$imageLabel"
        :caption="$status"
    />

    <div class="project-card__content">
        <div class="project-card__meta">
            <span class="project-card__number">{{ $number }}</span>
            <span class="project-card__status">{{ $status }}</span>
        </div>

        <h3 class="project-card__title">{{ $title }}</h3>
        <p class="project-card__description">{{ $description }}</p>

        @if (count($technologies))
            <ul class="project-card__technologies" aria-label="Technologies used">
                @foreach ($technologies as $technology)
                    <li>{{ $technology }}</li>
                @endforeach
            </ul>
        @endif

        @if ($githubUrl || $demoUrl)
            <div class="project-card__links">
                @if ($githubUrl)
                    <a href="{{ $githubUrl }}" target="_blank" rel="noopener noreferrer">
                        GitHub <span aria-hidden="true">&nearr;</span>
                    </a>
                @endif
                @if ($demoUrl)
                    <a href="{{ $demoUrl }}" target="_blank" rel="noopener noreferrer">
                        Live demo <span aria-hidden="true">&nearr;</span>
                    </a>
                @endif
            </div>
        @endif
    </div>
</article>
