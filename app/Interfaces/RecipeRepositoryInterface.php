<?php

namespace App\Interfaces;

interface RecipeRepositoryInterface extends RepositoryInterface
{
    public function getMostExpensiveRecipe();
    public function getCheapestRecipe();
    public function getHighestMarginRecipe();
    public function getLowestMarginRecipe();
}
