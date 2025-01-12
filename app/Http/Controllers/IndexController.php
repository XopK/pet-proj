<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        $recipes = Recipe::limit(6)->get();

        return Inertia::render('Home', [
            'recipes' => $recipes,
        ]);
    }
}
