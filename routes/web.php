<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/courses', function () {
    return view('pages.courses');
})->name('courses');

Route::get('/trainers', function () {
    return view('pages.trainers');
})->name('trainers');

Route::get('/events', function() {
    return view('pages.events');
})->name('events');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

