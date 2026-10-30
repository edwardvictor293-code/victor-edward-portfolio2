<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

$pages = [
    'home' => '/',
    'about' => '/about',
    'journey' => '/journey',
    'technology' => '/technology',
    'projects' => '/projects',
    'cv' => '/cv',
    'gallery' => '/gallery',
    'contact' => '/contact',
];

foreach ($pages as $name => $uri) {
    Route::get($uri, PageController::class)
        ->defaults('page', $name)
        ->name($name);
}
