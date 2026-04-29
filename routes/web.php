<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

// Elite Mode URLs
Route::get('/developer', function () {
    return view('home');
});

Route::get('/telecom', function () {
    return view('home');
});

Route::get('/it-support', function () {
    return view('home');
});

Route::get('/automation', function () {
    return view('home');
});



// Route::post('/contact', function (Request $request) {
//     return back()->with('success', 'Message sent!');
// });