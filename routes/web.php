<?php

use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminPartialsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\FrontContactController;



//Front ------------------------------------------
Route::group([], function () {
    Route::get('/', [FrontPageController::class, 'index'])->name('index');
    Route::post('/contact', [FrontContactController::class, 'store'])->name('contact.store');
});



//Admin ------------------------------------------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminIndexController::class,'index'])->name('index');


//    Route::prefix('category')->name('category.')->group(function () {
//        Route::get('/', [AdminCategoryController::class,'index'])->name('index');
//        Route::get('/create', [AdminCategoryController::class,'create'])->name('create');
//        Route::post('/store', [AdminCategoryController::class,'store'])->name('store');
//        Route::post('/delete', [AdminCategoryController::class,'delete'])->name('delete');
//        Route::get('/edit/{id}', [AdminCategoryController::class,'edit'])->name('edit');
//        Route::post('/update/{id}', [AdminCategoryController::class,'update'])->name('update');
//    });
//
//    Route::prefix('blog')->name('blog.')->group(function () {
//        Route::get('/', [AdminBlogController::class, 'index'])->name('index');
//        Route::get('/create', [AdminBlogController::class, 'create'])->name('create');
//        Route::post('/store', [AdminBlogController::class, 'store'])->name('store');
//        Route::post('/delete', [AdminBlogController::class, 'delete'])->name('delete');
//        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('edit');
//        Route::post('/update/{id}', [AdminBlogController::class, 'update'])->name('update');
//    });
//
//    Route::prefix('slider')->name('slider.')->group(function () {
//        Route::get('/', [AdminSliderController::class, 'index'])->name('index');
//        Route::get('/create', [AdminSliderController::class, 'create'])->name('create');
//        Route::post('/store', [AdminSliderController::class, 'store'])->name('store');
//        Route::post('/delete', [AdminSliderController::class, 'delete'])->name('delete');
//        Route::get('/edit/{id}', [AdminSliderController::class, 'edit'])->name('edit');
//        Route::post('/update/{id}', [AdminSliderController::class, 'update'])->name('update');
//    });
//
//    Route::prefix('message')->name('message.')->group(function () {
//        Route::get('/', [AdminMessageController::class, 'index'])->name('index');
//        Route::post('/delete', [AdminMessageController::class, 'delete'])->name('delete');
//        Route::get('/removed', [AdminMessageController::class, 'removedMessages'])->name('removedMessages');
//        Route::get('/removed/{id}', [AdminMessageController::class, 'permanentlyDelete'])->name('permanentlyDelete');
//    });


    //Component routes:
    Route::get('/settings', [AdminPartialsController::class,'settings'])->name('settings');
    Route::get('/blank-page', [AdminPartialsController::class,'blankPage'])->name('blankPage');
    Route::get('/invoice', [AdminPartialsController::class,'invoice'])->name('invoice');
    Route::get('/signin', [AdminPartialsController::class,'signin'])->name('signin');
    Route::get('/signup', [AdminPartialsController::class,'signup'])->name('signup');
    Route::get('/alerts', [AdminPartialsController::class,'alerts'])->name('alerts');
    Route::get('/buttons', [AdminPartialsController::class,'buttons'])->name('buttons');
    Route::get('/cards', [AdminPartialsController::class,'cards'])->name('cards');
    Route::get('/typography', [AdminPartialsController::class,'typography'])->name('typography');
    Route::get('/icons', [AdminPartialsController::class,'icons'])->name('icons');
    Route::get('/mdi-icons', [AdminPartialsController::class,'mdiIcons'])->name('mdiIcons');
    Route::get('/form-elements', [AdminPartialsController::class,'formElements'])->name('formElements');
    Route::get('/tables', [AdminPartialsController::class,'tables'])->name('tables');
    Route::get('/notification', [AdminPartialsController::class,'notification'])->name('notification');
});
