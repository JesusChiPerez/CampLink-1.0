<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Image;
use App\Scopes\AvailableScope;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    // SoftDeleted añade una fecha de borrado, con lo que oculta del sistema pero no lo elimina permanentemente.

    protected $table = 'products';

    protected $with = [
        'images',
    ];

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

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new AvailableScope);
    }

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

    public function scopeAvailable($query)
    {
        $query->where('status', 'available');
    }

    public function getTotalAttribute()
    {
        return $this->pivot->quantity * $this->price;
    }
}
