@extends('layouts.app')

@php
    $galleryCategories = [
        [
            'name' => 'Personal portraits',
            'slug' => 'personal-portraits',
            'photos' => [
                [
                    'image' => 'images/gallery/personal-portraits/portrait-outdoors.jpeg',
                    'alt' => 'A young man standing outdoors in a residential street.',
                    'caption' => 'An outdoor portrait.',
                ],
                [
                    'image' => 'images/gallery/personal-portraits/portrait-selfie.jpeg',
                    'alt' => 'A close-up selfie of a young man wearing a cap.',
                    'caption' => 'A portrait in natural light.',
                ],
            ],
        ],
        [
            'name' => 'Technology and learning experiences',
            'slug' => 'technology-learning',
            'photos' => [
                [
                    'image' => 'images/gallery/technology-learning/laptop-learning-pair.jpeg',
                    'alt' => 'Two people looking at a laptop together.',
                    'caption' => 'Exploring a laptop together.',
                ],
                [
                    'image' => 'images/gallery/technology-learning/computer-learning-session.jpeg',
                    'alt' => 'A group gathered around computers in a learning room.',
                    'caption' => 'A group learning session with computers.',
                ],
                [
                    'image' => 'images/gallery/technology-learning/laptop-learning.jpeg',
                    'alt' => 'A person using a laptop during a learning activity.',
                    'caption' => 'Working at a laptop.',
                ],
                [
                    'image' => 'images/gallery/technology-learning/group-of-friends-outdoors.jpeg',
                    'alt' => 'A young man standing with three women outdoors.',
                    'caption' => 'A group together outdoors.',
                ],
            ],
        ],
        [
            'name' => 'Friends and connections',
            'slug' => 'friends-connections',
            'photos' => [
                [
                    'image' => 'images/gallery/friends-connections/group-gathering.jpeg',
                    'alt' => 'A group of people standing together outdoors.',
                    'caption' => 'A group gathering.',
                ],
                [
                    'image' => 'images/gallery/friends-connections/friends-portrait.jpeg',
                    'alt' => 'A woman in a black-and-white portrait standing indoors.',
                    'caption' => 'A black-and-white portrait.',
                ],
                [
                    'image' => 'images/gallery/friends-connections/friend-with-baby.jpeg',
                    'alt' => 'A woman holding a baby outdoors.',
                    'caption' => 'A woman and baby outdoors.',
                ],
            ],
        ],
        [
            'name' => 'Christian community and fellowship',
            'slug' => 'christian-community',
            'photos' => [
                [
                    'image' => 'images/gallery/christian-community/fellowship-group.jpeg',
                    'alt' => 'A group portrait outside a building.',
                    'caption' => 'A group portrait.',
                ],
                [
                    'image' => 'images/gallery/christian-community/fellowship-pair.jpeg',
                    'alt' => 'Two women standing together outside a building.',
                    'caption' => 'Two people together outdoors.',
                ],
                [
                    'image' => 'images/gallery/christian-community/fellowship-gathering.jpeg',
                    'alt' => 'A group of people standing together outside a building.',
                    'caption' => 'A group gathering outdoors.',
                ],
                [
                    'image' => 'images/gallery/christian-community/fellowship-trio.jpeg',
                    'alt' => 'Three women standing together outside a building.',
                    'caption' => 'Three people together outdoors.',
                ],
            ],
        ],
        [
            'name' => 'Family memories',
            'slug' => 'family-memories',
            'photos' => [
                [
                    'image' => 'images/gallery/family-memories/family-selfie.jpeg',
                    'alt' => 'Several people gathered close together for a selfie.',
                    'caption' => 'A family selfie.',
                ],
                [
                    'image' => 'images/gallery/family-memories/family-selfie-portrait.jpeg',
                    'alt' => 'Several people gathered together for a portrait selfie.',
                    'caption' => 'A family portrait selfie.',
                ],
                [
                    'image' => 'images/gallery/family-memories/family-car-portrait.jpeg',
                    'alt' => 'A woman sitting in a car.',
                    'caption' => 'A portrait during a car ride.',
                ],
                [
                    'image' => 'images/gallery/family-memories/family-car-pair.jpeg',
                    'alt' => 'Two women sitting together in a car.',
                    'caption' => 'Two people together during a car ride.',
                ],
            ],
        ],
        [
            'name' => 'School and classmates',
            'slug' => 'school-classmates',
            'photos' => [
                [
                    'image' => 'images/gallery/school-classmates/school-awards-group.jpeg',
                    'alt' => 'Students wearing school uniforms; one student holds a medal.',
                    'caption' => 'Students together in school uniform.',
                ],
                [
                    'image' => 'images/gallery/school-classmates/school-classmates-pair.jpeg',
                    'alt' => 'Two students in school uniforms standing together outside.',
                    'caption' => 'Two classmates outside.',
                ],
                [
                    'image' => 'images/gallery/school-classmates/school-classmates-group.jpeg',
                    'alt' => 'A group of students in uniform standing outside a school building.',
                    'caption' => 'Classmates together outside school.',
                ],
                [
                    'image' => 'images/gallery/school-classmates/classmates-portrait.jpeg',
                    'alt' => 'A group of students wearing green plaid school uniforms.',
                    'caption' => 'A classmates portrait.',
                ],
            ],
        ],
    ];

    $gallerySlides = [];

    foreach ($galleryCategories as $category) {
        foreach ($category['photos'] as $photo) {
            $gallerySlides[] = [...$photo, 'categoryName' => $category['name']];
        }
    }
@endphp

@section('content')
    <section class="story-hero gallery-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="GALLERY / MOMENTS, REMEMBERED"
                title="A life, in frames."
                description="Portraits, people, learning and the moments that matter—shared in the photographs you provided."
                title-id="page-title"
            />
        </div>
        <div class="story-hero__image">
            <x-image-frame
                :src="asset('images/gallery/personal-portraits/portrait-outdoors.jpeg')"
                alt="A young man standing outdoors in a residential street."
                caption="Personal portrait"
                loading="eager"
                fetchpriority="high"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="slideshow-title">
        <div class="content-section__inner">
            <div class="gallery-section-heading">
                <x-section-heading
                    eyebrow="A SLOWER LOOK"
                    title="Scenes from the story."
                    description="A cinematic slideshow of the photographs provided for this gallery."
                    title-id="slideshow-title"
                    :level="2"
                />
                <p class="gallery-section-heading__index">VICTOR EDWARD / GALLERY</p>
            </div>

            <div
                class="gallery-slider"
                data-gallery-slider
                role="region"
                aria-roledescription="carousel"
                aria-label="Portfolio photo categories"
            >
                <div class="gallery-slider__viewport">
                    <div class="gallery-slider__track" data-gallery-track>
                        @foreach ($gallerySlides as $index => $photo)
                            <article
                                class="gallery-slider__slide"
                                data-gallery-slide
                                role="group"
                                aria-roledescription="slide"
                                aria-label="{{ $index + 1 }} of {{ count($gallerySlides) }}: {{ $photo['categoryName'] }}"
                            >
                                <img
                                    class="gallery-slider__image"
                                    src="{{ asset($photo['image']) }}"
                                    alt="{{ $photo['alt'] }}"
                                    loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                    decoding="async"
                                >
                                <div class="gallery-slider__caption">
                                    <p class="gallery-slider__eyebrow">
                                        {{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}
                                        / {{ ($photo['placeholder'] ?? false) ? 'PLACEHOLDER' : 'PHOTOGRAPH' }}
                                    </p>
                                    <h3>{{ $photo['categoryName'] }}</h3>
                                    <p>{{ $photo['caption'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <div class="gallery-slider__controls" data-gallery-controls hidden>
                    <button class="gallery-slider__arrow" type="button" data-gallery-previous aria-label="Previous slide">
                        <span aria-hidden="true">&larr;</span>
                    </button>
                    <div
                        class="gallery-slider__indicators"
                        data-gallery-indicators
                        role="group"
                        aria-label="Choose a slide"
                    ></div>
                    <button class="gallery-slider__arrow" type="button" data-gallery-next aria-label="Next slide">
                        <span aria-hidden="true">&rarr;</span>
                    </button>
                </div>
                <p class="visually-hidden" data-gallery-announcement aria-live="polite" aria-atomic="true"></p>
            </div>
        </div>
    </section>

    <section class="content-section" aria-labelledby="categories-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="THE COLLECTION"
                title="Six chapters of the story."
                description="Browse the photographs by theme. Captions describe only what is visible; no names or personal events are assumed."
                title-id="categories-title"
                :level="2"
            />

            <div class="gallery-category-grid">
                @php($gallerySlideIndex = 0)
                @foreach ($galleryCategories as $index => $category)
                    <article class="gallery-category" id="{{ $category['slug'] }}">
                        <div class="gallery-category__caption">
                            <h3>{{ $category['name'] }}</h3>
                            <p>{{ count($category['photos']) }} {{ count($category['photos']) === 1 ? 'image' : 'images' }}</p>
                        </div>
                        <div class="gallery-category__photos">
                            @foreach ($category['photos'] as $photo)
                                <figure class="gallery-photo">
                                    <a
                                        class="gallery-category__image-link"
                                        href="#slideshow-title"
                                        data-gallery-show-slide="{{ $gallerySlideIndex }}"
                                    >
                                        <img
                                            src="{{ asset($photo['image']) }}"
                                            alt="{{ $photo['alt'] }}"
                                            loading="lazy"
                                            decoding="async"
                                        >
                                        <span class="gallery-category__number">
                                            {{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                    </a>
                                    <figcaption class="gallery-photo__caption">
                                        <p>{{ $photo['caption'] }}</p>
                                        <code>public/{{ $photo['image'] }}</code>
                                    </figcaption>
                                </figure>
                                @php($gallerySlideIndex++)
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>

            <aside class="gallery-permission-note">
                <span class="gallery-permission-note__mark" aria-hidden="true">i</span>
                <p>
                    The photographs in this collection were provided for publication. Please obtain
                    permission before adding future photos featuring other identifiable people.
                </p>
            </aside>
        </div>
    </section>
@endsection
