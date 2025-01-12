<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name("index");
});


