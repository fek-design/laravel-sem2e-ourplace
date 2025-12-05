<?php

use Illuminate\Support\Facades\Route;

// This loads home.blade.php when someone goes to "/"
Route::get('/', function () {
    return view('home');
});

// This loads about.blade.php when someone goes to "/about"
Route::get('/about', function () {
    return view('about');
});

// This loads contact.blade.php when someone goes to "/contact"
Route::get('/catalogue', function () {
    return view('catalogue');
});
