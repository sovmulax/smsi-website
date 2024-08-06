<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
})->name('index');

Route::get('/presentation', function () {
    return view('client.about-us');
})->name('presentation');

Route::get('/blog', function () {
    return view('client.blog');
})->name('blog');

Route::get('/blog/details', function () {
    return view('client.blog-single-post');
})->name('blogs-details');

Route::get('/contacts', function () {
    return view('client.contact-us');
})->name('contacts');

Route::get('/rendez-vous', function () {
    return view('client.appointment');
})->name('meet');
