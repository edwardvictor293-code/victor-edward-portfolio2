@extends('layouts.app')

@section('content')
    <section class="story-hero projects-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="PROJECTS / EXPERIMENTS IN PROGRESS"
                title="Ideas, explored."
                description="A transparent look at the personal AI ideas and experiments I’ve explored so far. Concepts and prototypes are presented as such—not as finished products."
                title-id="page-title"
            />
            <div class="page-intro__actions">
                <x-button :href="route('technology')" variant="primary">Explore my interests</x-button>
                <x-button :href="route('contact')" variant="secondary">Get in touch</x-button>
            </div>
        </div>
        <div class="story-hero__image">
            <x-image-frame
                label="A project notebook placeholder"
                caption="Ideas / Experiments"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="projects-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="SELECTED IDEAS AND EXPERIMENTS"
                title="A work in progress."
                description="Project details, implementation technologies and public links are only shown when they are confirmed."
                title-id="projects-title"
                :level="2"
            />

            <div class="project-grid">
                <x-project-card
                    number="01"
                    title="JARVIS 2.0"
                    description="A personal AI assistant project I’m interested in developing. Its implementation, features and technology stack have not been documented here; it is not presented as complete."
                    status="Concept / planned"
                    image-label="JARVIS 2.0 project image placeholder"
                />

                <x-project-card
                    number="02"
                    title="AI application experiments"
                    description="I’ve experimented with approximately five AI-related applications or systems. Some are prototypes and experiments rather than finished commercial products."
                    status="Experiments / prototypes"
                    image-label="AI application experiments image placeholder"
                />
            </div>

            <p class="projects-note">
                Game Advisor AI and specific web-development projects are not listed yet:
                their descriptions, technologies, status and any public links have not been confirmed.
            </p>
        </div>
    </section>

    <section class="closing-section" aria-labelledby="projects-next-title">
        <div class="closing-section__inner">
            <x-section-heading
                eyebrow="MORE TO COME"
                title="Built one step at a time."
                description="As projects develop, this page can grow to include verified descriptions, technologies, and links."
                title-id="projects-next-title"
                :level="2"
            />

            <div class="page-intro__actions">
                <x-button :href="route('technology')" variant="primary">Technology interests</x-button>
                <x-button :href="route('journey')" variant="secondary">My journey</x-button>
            </div>
        </div>
    </section>
@endsection
