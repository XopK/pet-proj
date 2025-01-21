<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/recipes', [RecipeController::class, 'getRecipes']);

