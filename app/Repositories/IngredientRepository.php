<?php

namespace App\Repositories;

use App\Interfaces\IngredientRepositoryInterface;
use App\Models\Ingredient;

class IngredientRepository extends Repository implements IngredientRepositoryInterface
{
    /**
     * IngredientRepository constructor.
     *
     * @param Ingredient $ingredient
     */
    public function __construct(Ingredient $ingredient)
    {
        $this->model = $ingredient;
    }

}

