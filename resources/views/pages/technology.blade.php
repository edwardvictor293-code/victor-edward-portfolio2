@extends('layouts.app')

@section('content')
    <section class="story-hero technology-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="TECHNOLOGY / CURIOSITY IN PRACTICE"
                title="Learning by exploring."
                description="I’m drawn to the ideas behind intelligent systems, software and digital security—and to the careful work of learning how they fit together."
                title-id="page-title"
            />
            <div class="page-intro__actions">
                <x-button :href="route('projects')" variant="primary">See my experiments</x-button>
                <x-button href="{{ route('journey') }}#faith" variant="secondary">
                    Faith &amp; values
                </x-button>
            </div>
        </div>
        <div class="story-hero__image">
            <x-image-frame
                label="An abstract technology and learning placeholder"
                caption="Learning / Exploring"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="interests-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="AREAS I’M EXPLORING"
                title="A broad field of interest."
                description="These are interests and areas of learning—not claims of professional practice or completed qualifications."
                title-id="interests-title"
                :level="2"
            />

            <div class="technology-grid">
                <x-card eyebrow="01 / INTELLIGENT SYSTEMS" title="Artificial intelligence" :glass="true">
                    <p>I’m interested in AI and have experimented with approximately five AI-related applications or systems.</p>
                </x-card>

                <x-card eyebrow="02 / DIGITAL SECURITY" title="Cybersecurity" :glass="true">
                    <p>I’m interested in how digital systems and the people who use them can be better protected.</p>
                </x-card>

                <x-card eyebrow="03 / RESPONSIBLE EXPLORATION" title="Ethical hacking" :glass="true">
                    <p>Ethical hacking is an area I want to learn about as part of understanding security responsibly.</p>
                </x-card>

                <x-card eyebrow="04 / BUILDING" title="Software development">
                    <p>I’ve explored software development and want to keep building my understanding through practice.</p>
                </x-card>

                <x-card eyebrow="05 / THE PROCESS" title="Learning and experimentation">
                    <p>Some of my AI-related work has been experiments and prototypes—not finished commercial products.</p>
                </x-card>
            </div>
        </div>
    </section>

    <section class="content-section" aria-labelledby="learning-title">
        <div class="content-section__inner technology-learning">
            <div>
                <x-section-heading
                    eyebrow="CONTINUING TO LEARN"
                    title="Learning is ongoing."
                    description="I’m continuing to explore technology while building a foundation for what I hope to study next."
                    title-id="learning-title"
                    :level="2"
                />
            </div>

            <div class="technology-learning__details">
                <x-card eyebrow="CISCO ACADEMY" title="A learning journey">
                    <p>
                        I’m on a Cisco Academy learning journey. This describes ongoing learning;
                        no certificate or course completion is claimed here.
                    </p>
                </x-card>

                <x-card eyebrow="PERSONAL PROJECT IDEA" title="JARVIS 2.0">
                    <p>
                        I’m interested in developing JARVIS 2.0 as a personal AI assistant project.
                        It remains an idea to work toward, not a completed assistant.
                    </p>
                    <a class="highlight-card__link" href="{{ route('projects') }}">
                        View project notes <span aria-hidden="true">&rarr;</span>
                    </a>
                </x-card>
            </div>
        </div>
    </section>
@endsection
