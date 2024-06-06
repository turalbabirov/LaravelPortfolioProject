<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ContactController;



//Front
Route::group([], function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});
