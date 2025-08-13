<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/plans', function () {
    return view('plans');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/coverage', function () {
    return view('coverage');
});
Route::get('/contact', function () {
    return view('contact');
});