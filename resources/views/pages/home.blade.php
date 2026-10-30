@extends('layouts.app')

@section('content')
    <section class="home-hero" aria-labelledby="page-title">
        <div class="home-hero__inner">
            <div class="home-hero__copy">
                <x-section-heading
                    eyebrow="VICTOR EDWARD / PERSONAL PORTFOLIO"
                    title="A Journey of Becoming."
                    description="I’m Victor Edward, an AI and cybersecurity enthusiast interested in how intelligent systems are built, how software can solve problems, and how security can protect what matters."
                    title-id="page-title"
                />

                <p class="home-hero__identity">AI and Cybersecurity Enthusiast</p>

                <div class="page-intro__actions">
                    <x-button :href="route('cv')" variant="primary">
                        View my CV
                    </x-button>
                    <x-button :href="route('projects')" variant="secondary">
                        Explore projects
                        <span class="button__arrow" aria-hidden="true">&rarr;</span>
                    </x-button>
                </div>
            </div>

            <div class="home-hero__portrait">
                <x-image-frame
                    :src="asset('images/gallery/personal-portraits/portrait-outdoors.jpeg')"
                    alt="A young man standing outdoors in a residential street."
                    caption="Personal portrait"
                    loading="eager"
                    fetchpriority="high"
                />
                <span class="home-hero__portrait-note">VICTOR EDWARD / PORTRAIT</span>
            </div>
        </div>

        <a class="home-hero__scroll" href="#introduction">
            <span>Discover the story</span>
            <span aria-hidden="true">&darr;</span>
        </a>
    </section>

    <section class="content-section" id="introduction" aria-labelledby="introduction-title">
        <div class="content-section__inner introduction-grid">
            <x-section-heading
                eyebrow="THE BEGINNING"
                title="A path shaped by curiosity."
                description="My interests bring together technology, learning and the questions behind how things work."
                title-id="introduction-title"
                :level="2"
            />

            <div class="introduction-grid__story">
                <p>
                    My journey so far includes completing secondary school at Mission and Cosmopolitan
                    Schools, and serving as a Timekeeper in the school prefect group. These are parts of
                    a story still unfolding, with more to learn and discover.
                </p>
                <x-button :href="route('journey')" variant="secondary">
                    Follow my journey
                    <span class="button__arrow" aria-hidden="true">&rarr;</span>
                </x-button>
            </div>
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="highlights-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="A FEW DIRECTIONS"
                title="Explore what matters to me."
                description="A few starting points for learning more about my interests and the person behind this portfolio."
                title-id="highlights-title"
                :level="2"
            />

            <div class="highlight-grid">
                <x-card eyebrow="01 / THE PERSON" title="About me" :glass="true">
                    <p>My interests, the values I hope to carry, and the ambitions I’m working toward.</p>
                    <a class="highlight-card__link" href="{{ route('about') }}">
                        Read about me <span aria-hidden="true">&rarr;</span>
                    </a>
                </x-card>

                <x-card eyebrow="02 / THE PATH" title="My journey" :glass="true">
                    <p>Education, school experiences, the people around me, and what I hope comes next.</p>
                    <a class="highlight-card__link" href="{{ route('journey') }}">
                        Follow the journey <span aria-hidden="true">&rarr;</span>
                    </a>
                </x-card>

                <x-card eyebrow="03 / THE INTEREST" title="Technology" :glass="true">
                    <p>Artificial intelligence, software development and cybersecurity are areas I’m drawn to.</p>
                    <a class="highlight-card__link" href="{{ route('technology') }}">
                        Explore my interests <span aria-hidden="true">&rarr;</span>
                    </a>
                </x-card>
            </div>
        </div>
    </section>

    <section class="closing-section" aria-labelledby="closing-title">
        <div class="closing-section__inner">
            <x-section-heading
                eyebrow="THE NEXT CHAPTER"
                title="Still learning. Still becoming."
                description="This portfolio is a place to share that process, one thoughtful step at a time."
                title-id="closing-title"
                :level="2"
            />

            <div class="page-intro__actions">
                <x-button :href="route('cv')" variant="primary">View my CV</x-button>
                <x-button :href="route('projects')" variant="secondary">See my projects</x-button>
            </div>
        </div>
    </section>
@endsection
