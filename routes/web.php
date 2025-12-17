<?php

use Illuminate\Support\Facades\Route;

// Home page route - displays the main landing page
Route::get('/', function () {
    return view('home');
});

// D&D Events page route - displays Dungeons & Dragons event information
Route::get('/dnd', function () {
    return view('dnd');
});

// Catalogue page route - displays menu and game catalogue
Route::get('/catalogue', function () {
    return view('catalogue');
});
