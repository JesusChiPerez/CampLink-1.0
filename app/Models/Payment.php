<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payed_at',
        'order_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['payed_at'];

    // relación 1 a 1
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
