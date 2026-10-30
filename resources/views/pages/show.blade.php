@extends('layouts.app')

@section('content')
    <section class="page-intro" aria-labelledby="page-title">
        <div class="page-intro__copy">
            <x-section-heading
                eyebrow="VICTOR EDWARD / PORTFOLIO"
                :title="$title"
                description="A considered space for ideas, work and the moments in between."
                title-id="page-title"
            />

            <div class="page-intro__actions">
                <x-button :href="route('projects')" variant="primary">
                    Explore projects
                </x-button>
                <x-button :href="route('contact')" variant="secondary">
                    Get in touch
                    <span class="button__arrow" aria-hidden="true">&rarr;</span>
                </x-button>
            </div>
        </div>

        <div class="page-intro__aside">
            <x-image-frame label="A portrait will live here" />
            <span class="page-intro__index" aria-hidden="true">EST. / PERSONAL PORTFOLIO</span>
        </div>
    </section>
@endsection
