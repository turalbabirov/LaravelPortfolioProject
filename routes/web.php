<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\FrontContactController;



//Front
Route::group([], function () {
    Route::get('/', [FrontPageController::class, 'index'])->name('index');
    Route::post('/contact', [FrontContactController::class, 'store'])->name('contact.store');
});
