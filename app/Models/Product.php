<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Image;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
    ];

    // relación polimórfica muchos a muchos (tabla intermedia que además trae quantity)
    public function carts()
    {
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('quantity');
    }

    // relación polimórfica muchos a muchos (tabla intermedia que además trae quantity)
    public function orders()
    {
        return $this->morphedByMany(Order::class, 'productable')->withPivot('quantity');
    }

    // realción polimórfica 1 a muchos
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
