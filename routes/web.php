<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/author-profile', function () {
    return view('author-profile');
})->name('author-profile');

Route::get('/search-results', function () {
    return view('search-results');
})->name('search-results');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Livewire News Routes
Route::get('/news', App\Livewire\News\Index::class)->name('news.index');