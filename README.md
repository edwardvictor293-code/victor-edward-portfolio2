<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Portfolio foundation

The portfolio pages are available at `/`, `/about`, `/journey`, `/technology`, `/projects`, `/cv`, `/gallery`, and `/contact`. They share the Blade layout in `resources/views/layouts` and navigation/footer components in `resources/views/components`. The site uses Laravel Blade, CSS, and vanilla JavaScript.

The page routes are named after their paths, so Blade views can generate links with Laravel's `route()` helper. Shared frontend styles remain in `resources/css/app.css`, with Vite configured to bundle the existing JavaScript entry point.

### Design system

The shared visual tokens, typography, responsive breakpoints, scroll reveals, hover states, and component styles live in `resources/css/app.css`. Reusable Blade components in `resources/views/components` include `button`, `card`, `section-heading`, and `image-frame`, alongside the site navigation and footer. The navigation collapses to an accessible, keyboard-operable mobile menu; without JavaScript, its links remain available. Scroll reveals, the gallery carousel, and back-to-top control use small progressive-enhancement scripts and respect reduced-motion preferences.

### CV and photo gallery

The CV is in `resources/views/pages/cv.blade.php`. Its **Print / Save as PDF** control opens the browser's print dialog; choose **Save as PDF** to download a PDF. No date of birth or unprovided contact details are included.

The supplied photographs are organized in category-named folders under `public/images/gallery`. The gallery slideshow and category collections reference those files in `resources/views/pages/gallery.blade.php`; update the image path, alt text, and caption there when replacing or adding a photograph. The Christian community category retains its clearly labeled SVG placeholder because no supplied image was identified for that category. The slideshow uses vanilla JavaScript, pauses on hover or keyboard focus, and disables autoplay for reduced-motion preferences. Obtain permission before publishing additional photographs of other identifiable people.

The Contact page is in `resources/views/pages/contact.blade.php`. Its form currently performs browser-side validation only; configure a server-side message endpoint and delivery service before using it to send or store messages. No email address or WhatsApp number is published until provided.
