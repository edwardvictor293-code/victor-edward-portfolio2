<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    private const PAGE_TITLES = [
        'home' => 'Home',
        'about' => 'About',
        'journey' => 'Journey',
        'technology' => 'Technology',
        'projects' => 'Projects',
        'cv' => 'CV',
        'gallery' => 'Gallery',
        'contact' => 'Contact',
    ];

    private const DEDICATED_VIEWS = [
        'home' => 'pages.home',
        'about' => 'pages.about',
        'journey' => 'pages.journey',
        'technology' => 'pages.technology',
        'projects' => 'pages.projects',
        'cv' => 'pages.cv',
        'gallery' => 'pages.gallery',
        'contact' => 'pages.contact',
    ];

    public function __invoke(string $page): View
    {
        abort_unless(isset(self::PAGE_TITLES[$page]), 404);

        return view(self::DEDICATED_VIEWS[$page] ?? 'pages.show', [
            'title' => self::PAGE_TITLES[$page],
        ]);
    }
}
