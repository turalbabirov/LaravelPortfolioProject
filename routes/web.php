<?php

use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminPartialsController;
use App\Http\Controllers\Admin\Profile\AdminProfileController;
use App\Http\Controllers\Admin\ProjectCategory\AdminProjectCategoryController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Front\FrontContactController;
use App\Http\Controllers\Front\FrontPageController;
use Illuminate\Support\Facades\Route;


//Front ------------------------------------------
Route::group([], function () {
    Route::get('/', [FrontPageController::class, 'index'])->name('index');
    Route::post('/contact', [FrontContactController::class, 'store'])->name('contact.store');
});



//Admin ------------------------------------------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminIndexController::class,'index'])->name('index');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [AdminUserController::class,'index'])->name('index');
        Route::get('/create', [AdminUserController::class,'create'])->name('create');
        Route::post('/store', [AdminUserController::class,'store'])->name('store');
        Route::get('/delete/{id}', [AdminUserController::class,'delete'])->name('delete');
        Route::get('/edit/{id}', [AdminUserController::class,'edit'])->name('edit');
        Route::post('/update/{id}', [AdminUserController::class,'update'])->name('update');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/{id}', [AdminProfileController::class,'index'])->name('index');
        Route::get('/create/{id}', [AdminProfileController::class, 'create'])->name('create');
//        Route::match(['get', 'post'], '/create/{id}', [AdminProfileController::class, 'create'])->name('create');
        Route::post('/store', [AdminProfileController::class, 'store'])->name('store');
        Route::post('/delete', [AdminProfileController::class, 'delete'])->name('delete');
        Route::get('/edit/{id}', [AdminProfileController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminProfileController::class, 'update'])->name('update');

        Route::prefix('projectcategory')->name('projectcategory.')->group(function () {
            Route::get('/{id}', [AdminProjectCategoryController::class,'index'])->name('index');
            Route::post('/store', [AdminProjectCategoryController::class, 'store'])->name('store');
            Route::get('/delete/{id}', [AdminProjectCategoryController::class, 'delete'])->name('delete');
            Route::post('/edit/{id}', [AdminProjectCategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AdminProjectCategoryController::class, 'update'])->name('update');
        });
    });

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
