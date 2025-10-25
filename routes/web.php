<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/invitation', [InvitationController::class,'index'])->name('invitations.index');
Route::get('/invitation/{slug}', [InvitationController::class, 'show'])->name('invitation.show');
Route::resource('/structures', StructureController::class);
Route::resource('/news', NewsController::class);