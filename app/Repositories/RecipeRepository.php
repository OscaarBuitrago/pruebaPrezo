<?php

namespace App\Repositories;

use App\Interfaces\RecipeRepositoryInterface;
use App\Models\Recipe;

class RecipeRepository extends Repository implements RecipeRepositoryInterface
{
    /**
     * RecipeRepository constructor.
     *
     * @param Recipe $recipe
     */
    public function __construct(Recipe $recipe)
    {
        $this->model = $recipe;
    }

    public function getMostExpensiveRecipe()
    {
        return $this->model->with('ingredients')
            ->get()
            ->map(function ($recipe) {
                $totalCost = $recipe->ingredients->sum('cost');
                return [
                    'recipe' => $recipe,
                    'total_cost' => $totalCost,
                ];
            })
            ->sortByDesc('total_cost')
            ->first();
    }

    public function getCheapestRecipe()
    {
        return $this->model->with('ingredients')
            ->get()
            ->map(function ($recipe) {
                $totalCost = $recipe->ingredients->sum('cost');
                return [
                    'recipe' => $recipe,
                    'total_cost' => $totalCost,
                ];
            })
            ->sortBy('total_cost')
            ->first();
    }

    public function getHighestMarginRecipe()
    {
        return $this->model->with('ingredients')
            ->get()
            ->map(function ($recipe) {
                $totalCost = $recipe->ingredients->sum('cost');
                $profitMargin = $recipe->sale_price - $totalCost;
                return [
                    'recipe' => $recipe,
                    'profit_margin' => $profitMargin,
                ];
            })
            ->sortByDesc('profit_margin')
            ->first();
    }

    public function getLowestMarginRecipe()
    {
        return $this->model->with('ingredients')
            ->get()
            ->map(function ($recipe) {
                $totalCost = $recipe->ingredients->sum('cost');
                $profitMargin = $recipe->sale_price - $totalCost;
                return [
                    'recipe' => $recipe,
                    'profit_margin' => $profitMargin,
                ];
            })
            ->sortBy('profit_margin')
            ->first();
    }

}

