<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SaleController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipesCreate', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/stats-recipes', [RoutesController::class, 'statsRecipes'])->name('statsRecipes');
Route::get('/stats-sales', [RoutesController::class, 'statsSales'])->name('statsSales');


Route::get('/sales/create', [SaleController::class, 'create'])->name('sales.create');
Route::post('/salesCreate', [SaleController::class, 'store'])->name('sales.store');




