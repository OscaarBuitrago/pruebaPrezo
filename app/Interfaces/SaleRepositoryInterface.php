<?php

namespace App\Interfaces;

interface SaleRepositoryInterface extends RepositoryInterface
{
    public function getDayWithMaxSales();
    public function getDayWithMinSales();
}
