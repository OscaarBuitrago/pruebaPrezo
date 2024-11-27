<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'date',
        'sale_price',
        'quantity',
        'recipe_id',  
    ];


    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
