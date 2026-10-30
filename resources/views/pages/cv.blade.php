@extends('layouts.app')

@section('content')
    <section class="cv-page">
        <header class="cv-header">
            <div class="cv-header__copy">
                <p class="section-heading__eyebrow">CURRICULUM VITAE / PROFILE</p>
                <h1 class="cv-header__name" id="page-title">Victor Edward</h1>
                <p class="cv-header__focus">Cybersecurity · Artificial Intelligence · Technology</p>
            </div>
            <x-button class="cv-print-button" type="button" variant="secondary" data-print-cv>
                Print / Save as PDF
            </x-button>
        </header>

        <div class="cv-layout">
            <aside class="cv-sidebar" aria-label="Career objective">
                <p class="cv-sidebar__eyebrow">CAREER OBJECTIVE</p>
                <p>
                    To pursue learning and future opportunities in cybersecurity, artificial
                    intelligence and technology, while continuing to develop my understanding
                    and practical experience.
                </p>
                <a class="highlight-card__link" href="{{ route('contact') }}">
                    Contact <span aria-hidden="true">&rarr;</span>
                </a>
            </aside>

            <div class="cv-content">
                <section class="cv-section" aria-labelledby="profile-title">
                    <p class="cv-section__eyebrow">01 / PROFILE</p>
                    <h2 id="profile-title">Professional profile</h2>
                    <p>
                        I am interested in cybersecurity, artificial intelligence and technology.
                        I have explored AI-related applications and software development, and I am
                        continuing to learn. My experience so far includes serving as a Timekeeper
                        in the school prefect group.
                    </p>
                </section>

                <section class="cv-section" aria-labelledby="education-title">
                    <p class="cv-section__eyebrow">02 / EDUCATION</p>
                    <h2 id="education-title">Education</h2>
                    <div class="cv-entry">
                        <h3>Secondary school</h3>
                        <p>Mission and Cosmopolitan Schools</p>
                        <p class="cv-entry__note">Completed secondary school education.</p>
                    </div>
                </section>

                <section class="cv-section" aria-labelledby="interests-title">
                    <p class="cv-section__eyebrow">03 / AREAS OF INTEREST</p>
                    <h2 id="interests-title">Technical interests</h2>
                    <ul class="cv-list">
                        <li>Cybersecurity</li>
                        <li>Artificial intelligence</li>
                        <li>Technology and software development</li>
                        <li>Ethical hacking as an area of interest</li>
                    </ul>
                    <p class="cv-entry__note">
                        These are interests, not a claim of specific verified technical proficiency.
                    </p>
                </section>

                <section class="cv-section" aria-labelledby="experience-title">
                    <p class="cv-section__eyebrow">04 / PROJECTS &amp; PRACTICAL EXPERIENCE</p>
                    <h2 id="experience-title">Exploration and experiments</h2>
                    <div class="cv-entry">
                        <h3>AI-related applications and systems</h3>
                        <p>
                            Experimented with approximately five AI-related applications or systems.
                            Some were prototypes or experiments rather than finished commercial products.
                        </p>
                    </div>
                    <div class="cv-entry">
                        <h3>JARVIS 2.0</h3>
                        <p>
                            Personal AI assistant project idea; development is an ambition, not a
                            completed project.
                        </p>
                    </div>
                </section>

                <section class="cv-section" aria-labelledby="leadership-title">
                    <p class="cv-section__eyebrow">05 / LEADERSHIP</p>
                    <h2 id="leadership-title">School service</h2>
                    <div class="cv-entry">
                        <h3>Timekeeper</h3>
                        <p>School prefect group</p>
                    </div>
                </section>

                <section class="cv-section" aria-labelledby="training-title">
                    <p class="cv-section__eyebrow">06 / TRAINING &amp; CERTIFICATIONS</p>
                    <h2 id="training-title">Continuing learning</h2>
                    <div class="cv-entry">
                        <h3>Cisco Academy</h3>
                        <p>Learning journey in progress.</p>
                        <p class="cv-entry__note">
                            No course completion or certification is claimed.
                        </p>
                    </div>
                </section>

                <section class="cv-section" aria-labelledby="contact-title">
                    <p class="cv-section__eyebrow">07 / CONTACT</p>
                    <h2 id="contact-title">Contact information</h2>
                    <ul class="cv-list">
                        <li><a href="mailto:edwardvictor722@gmail.com">edwardvictor722@gmail.com</a></li>
                        <li>
                            <a
                                href="https://www.linkedin.com/in/victor-edward-83b7613b8/"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                LinkedIn profile
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://wa.me/2347036959944?text={{ rawurlencode('Hello Victor, I visited your portfolio website and would like to connect with you.') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                WhatsApp: +234 703 695 9944
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <p class="cv-privacy-note">
            This public CV intentionally omits date of birth and private personal information.
        </p>
    </section>
@endsection
