@extends('layouts.app')

@section('content')
    <section class="story-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="ABOUT / VICTOR EDWARD"
                title="A little about me."
                description="I’m interested in technology and the possibilities it opens up. I’m still learning, exploring, and working out how I want to contribute."
                title-id="page-title"
            />
        </div>
        <div class="story-hero__image">
            <x-image-frame
                :src="asset('images/gallery/personal-portraits/portrait-selfie.jpeg')"
                alt="A close-up selfie of a young man wearing a cap."
                caption="A personal moment"
                loading="eager"
                fetchpriority="high"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="background-title">
        <div class="content-section__inner">
            <div class="about-grid">
                <x-section-heading
                    eyebrow="MY BACKGROUND"
                    title="Learning is part of the story."
                    description="My education and school experiences are an important part of how I introduce myself."
                    title-id="background-title"
                    :level="2"
                />

                <div class="about-grid__details">
                    <x-card eyebrow="EDUCATION" title="Mission and Cosmopolitan Schools">
                        <p>I completed my secondary school education at Mission and Cosmopolitan Schools.</p>
                    </x-card>

                    <x-card eyebrow="SCHOOL SERVICE" title="Timekeeper">
                        <p>I served as a Timekeeper in the school prefect group.</p>
                    </x-card>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section" aria-labelledby="interests-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="WHAT DRAWS MY ATTENTION"
                title="A world of questions to explore."
                description="These are interests I’m building on—not claims of professional experience or completed qualifications."
                title-id="interests-title"
                :level="2"
            />

            <div class="interest-grid">
                <x-card eyebrow="01" title="Technology">
                    <p>I’m interested in the ideas and tools shaping how people build and use digital systems.</p>
                </x-card>
                <x-card eyebrow="02" title="Artificial intelligence">
                    <p>I want to keep learning about AI and how intelligent systems can be developed thoughtfully.</p>
                </x-card>
                <x-card eyebrow="03" title="Software development">
                    <p>I’m drawn to creating software and understanding the process behind useful digital products.</p>
                </x-card>
                <x-card eyebrow="04" title="Cybersecurity">
                    <p>I’m interested in how systems, information and the people who rely on them can be protected.</p>
                </x-card>
            </div>
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="values-title">
        <div class="content-section__inner values-layout">
            <x-section-heading
                eyebrow="WHAT I HOPE TO CARRY FORWARD"
                title="Curiosity with purpose."
                description="I want my approach to learning and technology to keep growing alongside my interests."
                title-id="values-title"
                :level="2"
            />

            <x-card class="values-card" eyebrow="PERSONAL VALUES">
                <p>
                    I see myself as a learner in progress. I’m still discovering my strengths and
                    personality, and I want to approach that process with curiosity, patience and
                    responsibility while finding a meaningful direction.
                </p>
            </x-card>
        </div>
    </section>

    <section class="closing-section" aria-labelledby="ambition-title">
        <div class="closing-section__inner">
            <x-section-heading
                eyebrow="LOOKING AHEAD"
                title="An ambition still taking shape."
                description="I hope to study Cybersecurity at FUTMINNA. This is a future ambition, not an admission or completed qualification."
                title-id="ambition-title"
                :level="2"
            />
            <div class="page-intro__actions">
                <x-button :href="route('journey')" variant="primary">Explore my journey</x-button>
                <x-button :href="route('contact')" variant="secondary">Get in touch</x-button>
            </div>
        </div>
    </section>
@endsection
