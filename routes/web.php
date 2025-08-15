<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'RefillPro',
            'desc' => 'Water delivery app with Flutter frontend and Laravel backend, including authentication, map integration, and image upload.',
            'tech' => 'Laravel, Flutter, MySQL',
            'link' => 'https://github.com/jeemsama/refillpro.git',
            'image' => 'images/refillpro.png',
        ],
        [
            'title' => 'RefillPro for Owners/Riders',
            'desc' => 'Water delivery app with Flutter frontend and Laravel backend, including authentication, map integration, and image upload.',
            'tech' => 'Laravel, Flutter, MySQL',
            'link' => 'https://github.com/jeemsama/refillpro_owner-rider.git',
            'image' => 'images/refillpro.png',
        ],
        [
            'title' => 'Portfolio Site',
            'desc' => 'This one-page portfolio built in Laravel 12 with Bootstrap.',
            'tech' => 'Laravel 12, Blade, Bootstrap 5',
            'link' => null,
            'image' => null,
        ],
    ];
    return view('portfolio', compact('projects'));
});