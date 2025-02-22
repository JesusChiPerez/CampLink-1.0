<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;

class PanelProduct extends Product
{
    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        //
    }
}
