<footer class="site-footer">
    <div class="site-footer__inner">
        <a class="site-footer__brand" href="{{ route('home') }}">VICTOR EDWARD</a>
        <p class="site-footer__note">A considered collection of work and ideas.</p>
        <nav class="site-footer__socials" aria-label="Contact and social profiles">
            <a href="mailto:edwardvictor722@gmail.com" aria-label="Email Victor Edward">
                <x-social-icon name="email" />
            </a>
            <a
                href="https://www.linkedin.com/in/victor-edward-83b7613b8/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Victor Edward on LinkedIn (opens in a new tab)"
            >
                <x-social-icon name="linkedin" />
            </a>
            <a
                href="https://wa.me/2347036959944?text={{ rawurlencode('Hello Victor, I visited your portfolio website and would like to connect with you.') }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Message Victor Edward on WhatsApp (opens in a new tab)"
            >
                <x-social-icon name="whatsapp" />
            </a>
        </nav>
        <p class="site-footer__copyright">&copy; {{ now()->year }} VICTOR EDWARD</p>
    </div>
</footer>
