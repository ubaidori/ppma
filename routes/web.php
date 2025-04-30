<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\StructureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/structures', StructureController::class);
Route::resource('/news', NewsController::class);