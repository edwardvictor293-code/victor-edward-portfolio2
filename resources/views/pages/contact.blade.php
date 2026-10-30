@extends('layouts.app')

@php
    $emailAddress = 'edwardvictor722@gmail.com';
    $linkedInUrl = 'https://www.linkedin.com/in/victor-edward-83b7613b8/';
    $whatsAppUrl = 'https://wa.me/2347036959944?text='.rawurlencode(
        'Hello Victor, I visited your portfolio website and would like to connect with you.'
    );
@endphp

@section('content')
    <section class="story-hero contact-hero" aria-labelledby="page-title">
        <div class="story-hero__copy">
            <x-section-heading
                eyebrow="CONTACT / START A CONVERSATION"
                title="Let’s connect."
                description="I welcome thoughtful conversations about technology, learning and future opportunities. Choose a contact option or leave a message for when this form is connected."
                title-id="page-title"
            />
            <div class="page-intro__actions">
                <x-button href="#contact-form" variant="primary">
                    Write a message
                    <span class="button__arrow" aria-hidden="true">&darr;</span>
                </x-button>
                <x-button
                    :href="$whatsAppUrl"
                    variant="secondary"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <x-social-icon class="social-icon" name="whatsapp" />
                    Message me on WhatsApp
                    <span class="button__arrow" aria-hidden="true">&nearr;</span>
                </x-button>
                <x-button
                    :href="$linkedInUrl"
                    variant="secondary"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <x-social-icon class="social-icon" name="linkedin" />
                    Connect on LinkedIn
                    <span class="button__arrow" aria-hidden="true">&nearr;</span>
                </x-button>
            </div>
        </div>
        <div class="story-hero__image contact-hero__image">
            <x-image-frame
                :src="asset('images/gallery/personal-portraits/portrait-outdoors.jpeg')"
                alt="A young man standing outdoors in a residential street."
                caption="Victor Edward"
                loading="eager"
                fetchpriority="high"
            />
        </div>
    </section>

    <section class="content-section content-section--quiet" aria-labelledby="contact-options-title">
        <div class="content-section__inner">
            <x-section-heading
                eyebrow="WAYS TO REACH ME"
                title="Choose your preferred channel."
                description="Only contact information that has been provided is shown here."
                title-id="contact-options-title"
                :level="2"
            />

            <div class="contact-options">
                <article class="contact-option">
                    <p class="contact-option__eyebrow">01 / EMAIL</p>
                    <span class="contact-option__icon"><x-social-icon name="email" /></span>
                    <h3>Email</h3>
                    <p>Send me a message directly by email.</p>
                    <a class="contact-option__link" href="mailto:{{ $emailAddress }}">
                        {{ $emailAddress }} <span aria-hidden="true">&nearr;</span>
                    </a>
                </article>

                <article class="contact-option">
                    <p class="contact-option__eyebrow">02 / PROFESSIONAL NETWORK</p>
                    <span class="contact-option__icon"><x-social-icon name="linkedin" /></span>
                    <h3>LinkedIn</h3>
                    <p>Visit my profile to connect professionally.</p>
                    <a
                        class="contact-option__link"
                        href="{{ $linkedInUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <x-social-icon class="social-icon" name="linkedin" />
                        View LinkedIn profile <span aria-hidden="true">&nearr;</span>
                    </a>
                </article>

                <article class="contact-option">
                    <p class="contact-option__eyebrow">03 / WHATSAPP</p>
                    <span class="contact-option__icon"><x-social-icon name="whatsapp" /></span>
                    <h3>WhatsApp</h3>
                    <p>Start a direct conversation with me on WhatsApp.</p>
                    <a
                        class="contact-option__link"
                        href="{{ $whatsAppUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <x-social-icon class="social-icon" name="whatsapp" />
                        Chat on WhatsApp <span aria-hidden="true">&nearr;</span>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="content-section" aria-labelledby="contact-form-title">
        <div class="content-section__inner contact-form-layout">
            <div class="contact-form-intro">
                <x-section-heading
                    eyebrow="A NOTE, FOR LATER"
                    title="Send a message."
                    description="The form checks the required fields in your browser. It is not connected to email or a message service, so nothing you enter is sent or stored."
                    title-id="contact-form-title"
                    :level="2"
                />
                <p class="contact-form-intro__note">
                    Backend message delivery still needs to be configured before this form can send messages.
                </p>
            </div>

            <form class="contact-form" id="contact-form" data-contact-form>
                <div class="contact-form__field">
                    <label for="contact-name">Your name</label>
                    <input
                        id="contact-name"
                        name="name"
                        type="text"
                        autocomplete="name"
                        maxlength="100"
                        required
                    >
                </div>

                <div class="contact-form__field">
                    <label for="contact-email">Email address</label>
                    <input
                        id="contact-email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        maxlength="254"
                        required
                    >
                </div>

                <div class="contact-form__field">
                    <label for="contact-subject">Subject</label>
                    <input
                        id="contact-subject"
                        name="subject"
                        type="text"
                        maxlength="150"
                        required
                    >
                </div>

                <div class="contact-form__field">
                    <label for="contact-message">Message</label>
                    <textarea
                        id="contact-message"
                        name="message"
                        rows="6"
                        minlength="10"
                        maxlength="5000"
                        required
                    ></textarea>
                    <span class="contact-form__hint">10–5,000 characters</span>
                </div>

                <button class="button button--primary" type="submit" data-contact-submit disabled>
                    Check message
                </button>
                <p class="contact-form__status" data-contact-status role="status" aria-live="polite"></p>
                <p class="contact-form__backend-note">
                    This is a front-end demonstration only. Messages are not sent.
                </p>
            </form>
        </div>
    </section>
@endsection
