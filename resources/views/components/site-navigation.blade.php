@php
    $navigationItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Journey', 'route' => 'journey'],
        ['label' => 'Technology', 'route' => 'technology'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'CV', 'route' => 'cv'],
        ['label' => 'Gallery', 'route' => 'gallery'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="site-header">
    <div class="site-header__inner">
        <a class="site-brand" href="{{ route('home') }}" aria-label="Victor Edward, Home">
            <span class="site-brand__mark" aria-hidden="true">V</span>
            <span>VICTOR EDWARD</span>
        </a>

        <button
            class="menu-toggle"
            type="button"
            aria-controls="primary-navigation"
            aria-expanded="false"
        >
            <span class="menu-toggle__icon" aria-hidden="true"></span>
            <span class="menu-toggle__label">Menu</span>
        </button>

        <nav aria-label="Main navigation">
            <ul class="site-navigation" id="primary-navigation">
                @foreach ($navigationItems as $item)
                    <li @if ($item['route'] === 'contact') class="site-navigation__contact" @endif>
                        <a
                            href="{{ route($item['route']) }}"
                            @if (request()->routeIs($item['route'])) aria-current="page" @endif
                        >
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
