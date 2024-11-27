<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Interfaces\RecipeRepositoryInterface;
use App\Interfaces\IngredientRepositoryInterface;


class RecipeController extends Controller
{

    protected $recipeRepository;
    protected $ingredientRepository;

    public function __construct(RecipeRepositoryInterface $recipeRepository,IngredientRepositoryInterface $ingredientRepository)
    {
        $this->recipeRepository = $recipeRepository;
        $this->ingredientRepository = $ingredientRepository;
    }

    /**
     * Show the form for creating a new recipe.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('recipes.form');
    }

    /**
     * Store a newly created recipe in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $recipeData = [
            'name' => $request['name'],
            'sale_price' => $request['sale_price'],
        ];

        $recipe = $this->recipeRepository->create($recipeData);

        if ($request->has('ingredients') && is_array($request->ingredients)) {
            foreach ($request['ingredients'] as $ingredient) {
                $ingredientData = [
                    'name' => $ingredient['name'],
                    'cost' => $ingredient['cost'],
                    'recipe_id' => $recipe->id,
                ];
                $this->ingredientRepository->create($ingredientData);
            }
        }

        return redirect()->route('home')->with('success', 'Receta creada correctamente!');
    }
}
