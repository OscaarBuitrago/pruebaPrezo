<?php

namespace App\Http\Controllers;

use App\Interfaces\RecipeRepositoryInterface;
use App\Interfaces\SaleRepositoryInterface;

class RoutesController extends Controller
{
    protected $recipeRepository;
    protected $saleRepository;

    public function __construct(RecipeRepositoryInterface $recipeRepository,SaleRepositoryInterface $saleRepository)
    {
        $this->recipeRepository = $recipeRepository;
        $this->saleRepository = $saleRepository;
    }

    public function statsRecipes()
    {
        $mostExpensiveRecipe = $this->recipeRepository->getMostExpensiveRecipe();
        $cheapestRecipe = $this->recipeRepository->getCheapestRecipe();
        $highestMarginRecipe = $this->recipeRepository->getHighestMarginRecipe();
        $lowestMarginRecipe = $this->recipeRepository->getLowestMarginRecipe();

        return view('statsRecipes', [
            'mostExpensiveRecipe' => $mostExpensiveRecipe,
            'cheapestRecipe' => $cheapestRecipe,
            'highestMarginRecipe' => $highestMarginRecipe,
            'lowestMarginRecipe' => $lowestMarginRecipe,
        ]);
    }

    public function statsSales()
    {
        $dayWithMaxSales = $this->saleRepository->getDayWithMaxSales();
        $dayWithMinSales = $this->saleRepository->getDayWithMinSales();

        return view('statsSales', [
            'dayWithMaxSales' => $dayWithMaxSales,
            'dayWithMinSales' => $dayWithMinSales,
        ]);
    }
}
