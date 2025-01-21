<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name("index");
});


Route::controller(RecipeController::class)->group(function () {
    Route::get('/recipes', 'index')->name("recipes");
});


