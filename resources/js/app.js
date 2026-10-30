import './bootstrap';

document.documentElement.classList.add('has-js');

const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-navigation');
const menuLabel = menuToggle?.querySelector('.menu-toggle__label');

if (menuToggle instanceof HTMLButtonElement && navigation instanceof HTMLElement && menuLabel instanceof HTMLElement) {
    const closeMenu = () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        navigation.classList.remove('is-open');
        menuLabel.textContent = 'Menu';
    };

    menuToggle.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        navigation.classList.toggle('is-open', !isExpanded);
        menuLabel.textContent = isExpanded ? 'Menu' : 'Close';
    });

    navigation.addEventListener('click', (event) => {
        if (event.target instanceof HTMLAnchorElement) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menuToggle.getAttribute('aria-expanded') === 'true') {
            closeMenu();
            menuToggle.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.matchMedia('(min-width: 52.01rem)').matches) {
            closeMenu();
        }
    });
}

const gallerySlider = document.querySelector('[data-gallery-slider]');

if (gallerySlider instanceof HTMLElement) {
    const track = gallerySlider.querySelector('[data-gallery-track]');
    const slides = Array.from(gallerySlider.querySelectorAll('[data-gallery-slide]'));
    const controls = gallerySlider.querySelector('[data-gallery-controls]');
    const indicators = gallerySlider.querySelector('[data-gallery-indicators]');
    const previousButton = gallerySlider.querySelector('[data-gallery-previous]');
    const nextButton = gallerySlider.querySelector('[data-gallery-next]');
    const announcement = gallerySlider.querySelector('[data-gallery-announcement]');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    if (
        track instanceof HTMLElement &&
        slides.length > 1 &&
        controls instanceof HTMLElement &&
        indicators instanceof HTMLElement &&
        previousButton instanceof HTMLButtonElement &&
        nextButton instanceof HTMLButtonElement &&
        announcement instanceof HTMLElement
    ) {
        let currentSlide = 0;
        let isHovered = false;
        let hasFocus = false;
        let timer;

        const stopAutoPlay = () => {
            window.clearInterval(timer);
            timer = undefined;
        };

        const startAutoPlay = () => {
            stopAutoPlay();

            if (!reducedMotion.matches) {
                timer = window.setInterval(() => {
                    if (!isHovered && !hasFocus && document.visibilityState === 'visible') {
                        showSlide(currentSlide + 1);
                    }
                }, 5500);
            }
        };

        const showSlide = (index, announceChange = false) => {
            currentSlide = (index + slides.length) % slides.length;

            const activeImage = slides[currentSlide].querySelector('img');

            if (activeImage instanceof HTMLImageElement) {
                activeImage.loading = 'eager';
            }

            track.style.transform = `translate3d(-${currentSlide * 100}%, 0, 0)`;

            slides.forEach((slide, slideIndex) => {
                const isCurrent = slideIndex === currentSlide;

                slide.setAttribute('aria-hidden', String(!isCurrent));
                slide.inert = !isCurrent;
            });

            indicators.querySelectorAll('button').forEach((indicator, indicatorIndex) => {
                if (indicatorIndex === currentSlide) {
                    indicator.setAttribute('aria-current', 'true');
                } else {
                    indicator.removeAttribute('aria-current');
                }
            });

            if (announceChange) {
                announcement.textContent = `Slide ${currentSlide + 1} of ${slides.length}: ${slides[currentSlide].getAttribute('aria-label')}`;
                startAutoPlay();
            }
        };

        slides.forEach((slide, index) => {
            const indicator = document.createElement('button');

            indicator.className = 'gallery-slider__indicator';
            indicator.type = 'button';
            indicator.setAttribute('aria-label', `Show slide ${index + 1}: ${slide.getAttribute('aria-label')}`);
            indicator.addEventListener('click', () => showSlide(index, true));
            indicators.append(indicator);
        });

        previousButton.addEventListener('click', () => showSlide(currentSlide - 1, true));
        nextButton.addEventListener('click', () => showSlide(currentSlide + 1, true));

        gallerySlider.addEventListener('gallery:show-slide', (event) => {
            const slideIndex = event.detail;

            if (Number.isInteger(slideIndex) && slideIndex >= 0 && slideIndex < slides.length) {
                showSlide(slideIndex, true);
            }
        });

        gallerySlider.addEventListener('pointerenter', () => {
            isHovered = true;
        });

        gallerySlider.addEventListener('pointerleave', () => {
            isHovered = false;
        });

        gallerySlider.addEventListener('focusin', () => {
            hasFocus = true;
        });

        gallerySlider.addEventListener('focusout', (event) => {
            if (!gallerySlider.contains(event.relatedTarget)) {
                hasFocus = false;
            }
        });

        document.addEventListener('visibilitychange', () => {
            if (document.visibilityState === 'visible') {
                startAutoPlay();
            } else {
                stopAutoPlay();
            }
        });

        reducedMotion.addEventListener('change', startAutoPlay);
        showSlide(0);
        gallerySlider.classList.add('is-enhanced');
        controls.hidden = false;
        startAutoPlay();
    }
}

const galleryCategoryGrid = document.querySelector('.gallery-category-grid');

if (galleryCategoryGrid instanceof HTMLElement && gallerySlider instanceof HTMLElement) {
    galleryCategoryGrid.addEventListener('click', (event) => {
        if (!(event.target instanceof Element)) {
            return;
        }

        const photoLink = event.target.closest('[data-gallery-show-slide]');

        if (photoLink instanceof HTMLAnchorElement) {
            const slideIndex = Number(photoLink.dataset.galleryShowSlide);
            const slideCount = gallerySlider.querySelectorAll('[data-gallery-slide]').length;

            if (
                Number.isInteger(slideIndex) &&
                slideIndex >= 0 &&
                slideIndex < slideCount
            ) {
                gallerySlider.dispatchEvent(new CustomEvent('gallery:show-slide', { detail: slideIndex }));
            }
        }
    });
}

const revealTargets = document.querySelectorAll(
    'main > section, .card, .project-card, .gallery-category, .contact-option, .journey-timeline__item, .cv-section',
);
const reducedMotionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');

if ('IntersectionObserver' in window && !reducedMotionPreference.matches) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    revealTargets.forEach((target) => {
        target.classList.add('reveal-on-scroll');
        revealObserver.observe(target);
    });
}

const printCvButton = document.querySelector('[data-print-cv]');

if (printCvButton instanceof HTMLButtonElement) {
    printCvButton.addEventListener('click', () => window.print());
}

const backToTop = document.querySelector('.back-to-top');

if (backToTop instanceof HTMLAnchorElement) {
    const updateBackToTopVisibility = () => {
        backToTop.hidden = window.scrollY < 480;
    };

    window.addEventListener('scroll', updateBackToTopVisibility, { passive: true });
    updateBackToTopVisibility();
}

const contactForm = document.querySelector('[data-contact-form]');

if (contactForm instanceof HTMLFormElement) {
    const submitButton = contactForm.querySelector('[data-contact-submit]');
    const status = contactForm.querySelector('[data-contact-status]');

    if (submitButton instanceof HTMLButtonElement && status instanceof HTMLElement) {
        submitButton.disabled = false;

        contactForm.addEventListener('submit', (event) => {
            event.preventDefault();

            if (!contactForm.reportValidity()) {
                status.textContent = 'Please check the highlighted fields and try again.';
                return;
            }

            status.textContent = 'Your message passes the form checks, but it has not been sent. Message delivery is not connected yet.';
        });
    }
}
