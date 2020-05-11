<?php

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::view('/{any}', 'layouts.app')->where('any', '.*');

Route::any('/{slug}', function() {
    return view('welcome');
})->where('slug', '.*');

