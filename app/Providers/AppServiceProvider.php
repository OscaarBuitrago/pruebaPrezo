<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('App\Interfaces\RecipeRepositoryInterface', 'App\Repositories\RecipeRepository');
        $this->app->bind('App\Interfaces\IngredientRepositoryInterface', 'App\Repositories\IngredientRepository');
        $this->app->bind('App\Interfaces\SaleRepositoryInterface', 'App\Repositories\SaleRepository');

    }
}
