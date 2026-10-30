@extends('layouts.app')

@section('content')
    <section class="story-hero journey-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="JOURNEY / A STORY IN PROGRESS"
                title="The path so far."
                description="An unfinished story of education, school life, faith, people, responsibility and the future I hope to build."
                title-id="page-title"
            />
            <div class="page-intro__actions">
                <x-button href="#faith" variant="secondary">
                    Faith &amp; values
                    <span class="button__arrow" aria-hidden="true">&darr;</span>
                </x-button>
            </div>
        </div>
        <div class="story-hero__image">
            <x-image-frame
                :src="asset('images/gallery/school-classmates/school-awards-group.jpeg')"
                alt="Students wearing school uniforms; one student holds a medal."
                caption="School memories"
                loading="eager"
                fetchpriority="high"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="timeline-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="EDUCATION / EXPERIENCES / POSSIBILITY"
                title="Milestones, without the dates."
                description="Each chapter is shared as a part of my story, without adding timelines or details that aren’t mine to claim."
                title-id="timeline-title"
                :level="2"
            />

            <ol class="journey-timeline">
                <li class="journey-timeline__item">
                    <span class="journey-timeline__marker" aria-hidden="true">01</span>
                    <div class="journey-timeline__content">
                        <p class="journey-timeline__label">EDUCATION</p>
                        <h3>Secondary school</h3>
                        <p>
                            I completed secondary school at Mission and Cosmopolitan Schools. My
                            education is a foundational part of the path that has brought me here.
                        </p>
                    </div>
                    <x-image-frame
                        class="image-frame--wide journey-timeline__image"
                        label="School memories placeholder"
                    />
                </li>

                <li class="journey-timeline__item">
                    <span class="journey-timeline__marker" aria-hidden="true">02</span>
                    <div class="journey-timeline__content">
                        <p class="journey-timeline__label">SCHOOL EXPERIENCE</p>
                        <h3>Serving as a Timekeeper</h3>
                        <p>
                            I served as a Timekeeper in the school prefect group. It is one of the
                            responsibilities that forms part of my school experience.
                        </p>
                    </div>
                </li>

                <li class="journey-timeline__item">
                    <span class="journey-timeline__marker" aria-hidden="true">03</span>
                    <div class="journey-timeline__content">
                        <p class="journey-timeline__label">PEOPLE &amp; FRIENDSHIPS</p>
                        <h3>A journey shared with others</h3>
                        <p>
                            Friendships and the people who have influenced my journey belong in this
                            story. I value the place they hold in it, without turning that into
                            conversations or personal stories that haven’t been shared here.
                        </p>
                    </div>
                    <x-image-frame
                        class="image-frame--wide journey-timeline__image"
                        label="People and friendship memories placeholder"
                    />
                </li>

                <li class="journey-timeline__item">
                    <span class="journey-timeline__marker" aria-hidden="true">04</span>
                    <div class="journey-timeline__content">
                        <p class="journey-timeline__label">GROWTH &amp; DEVELOPMENT</p>
                        <h3>Still learning, still growing</h3>
                        <p>
                            Education, school experiences and taking on a role in the prefect group
                            are parts of my life that have contributed to my ongoing development.
                            There is more to learn about myself and the direction I want to take.
                        </p>
                    </div>
                </li>

                <li class="journey-timeline__item journey-timeline__item--future">
                    <span class="journey-timeline__marker" aria-hidden="true">05</span>
                    <div class="journey-timeline__content">
                        <p class="journey-timeline__label">THE NEXT CHAPTER / AN AMBITION</p>
                        <h3>Cybersecurity at FUTMINNA</h3>
                        <p>
                            I hope to study Cybersecurity at the Federal University of Technology,
                            Minna (FUTMINNA). This is an ambition for the future—not an admission or
                            a completed qualification.
                        </p>
                        <x-button :href="route('about')" variant="secondary">
                            More about me
                            <span class="button__arrow" aria-hidden="true">&rarr;</span>
                        </x-button>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="content-section faith-section" id="faith" aria-labelledby="faith-title">
        <div class="content-section__inner faith-section__inner">
            <div class="faith-section__copy">
                <x-section-heading
                    eyebrow="FAITH / A PERSONAL FOUNDATION"
                    title="Faith, purpose and growth."
                    description="My Christian faith and biblical principles are important parts of my personal development."
                    title-id="faith-title"
                    :level="2"
                />
                <p class="faith-section__body">
                    They matter to how I think about purpose, discipline, growth and the values I
                    want to carry into the future. Faith is part of my ongoing personal journey,
                    alongside learning and becoming more intentional about the person I hope to be.
                </p>
            </div>

            <x-card
                class="faith-card"
                eyebrow="FAITH AND VALUES"
                title="A grounding for the journey"
            >
                <p>
                    A quiet reminder to keep learning with purpose, practise discipline and let
                    personal growth be guided by the principles that matter to me.
                </p>
            </x-card>
        </div>
    </section>
@endsection
