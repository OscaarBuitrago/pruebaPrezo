<?php

namespace App\Repositories;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;

class SaleRepository extends Repository implements SaleRepositoryInterface
{
    /**
     * SaleRepository constructor.
     *
     * @param Sale $sale
     */
    public function __construct(Sale $sale)
    {
        $this->model = $sale;
    }

     /**
     * Obtener el día con mayor volumen de ventas.
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getDayWithMaxSales()
    {
        return $this->model->selectRaw('date, SUM(quantity) as total_sales')
            ->groupBy('date')
            ->orderByDesc('total_sales')
            ->first();
    }

    /**
     * Obtener el día con menor volumen de ventas.
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function getDayWithMinSales()
    {
        return $this->model->selectRaw('date, SUM(quantity) as total_sales')
            ->groupBy('date')
            ->orderBy('total_sales')
            ->first();
    }

}

