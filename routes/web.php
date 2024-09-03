<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    // Logika pengiriman email atau hanya return response sederhana
    return response()->json(['message' => 'Form submitted successfully']);
});
