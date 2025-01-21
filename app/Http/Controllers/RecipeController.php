<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RecipeController extends Controller
{
    public function index()
    {
        return Inertia::render('Recipes');
    }

    public function getRecipes()
    {
        $recipes = Recipe::all();
        return response()->json($recipes);
    }
}
