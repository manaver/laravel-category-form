<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/addCategory', 'addCategory')->name('addCategory');
});
