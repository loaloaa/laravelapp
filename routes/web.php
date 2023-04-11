<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontrolar;


Route::get('/', function () {
    return view('index');
});
Route::get('index.html', function () {
    return view('index');
});
Route::get('about.html', function () {
    return view('about');
});
Route::get('fruit.html', function () {
    return view('fruit');
});
Route::get('testimonial.html', function () {
    return view('testimonial');
});
Route::get('contact.html', function () {
    return view('contact');
});
