<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    // relación polimórfica 1 a muchos (que además trae quantity)
    public function products()
    {
        return $this->morphToMany(Product::class, 'productable')->withPivot('quantity');
    }


    public function getTotalAttribute()
    {
        return $this->products->pluck('total')->sum();
    }
}
