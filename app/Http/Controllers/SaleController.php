<?php

namespace App\Http\Controllers;

use App\Interfaces\RecipeRepositoryInterface;
use App\Interfaces\SaleRepositoryInterface;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    protected $recipeRepository;
    protected $saleRepository;

    public function __construct(RecipeRepositoryInterface $recipeRepository, SaleRepositoryInterface $saleRepository)
    {
        $this->recipeRepository = $recipeRepository;
        $this->saleRepository = $saleRepository;
    }

    /**
     * Show the form for creating a new sale.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Usar el repositorio para obtener las recetas
        $recipes = $this->recipeRepository->all();

        return view('sales.form', compact('recipes'));
    }

    /**
     * Store a newly created sale in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $saleData = [
            'date' => $request['date'],
            'sale_price' => $request['sale_price'],
            'quantity' => $request['quantity'],
            'recipe_id' => $request['recipe_id'],
        ];

        $this->saleRepository->create($saleData);

        return redirect()->route('home')->with('success', 'Venta creada con éxito.');
    }
}
