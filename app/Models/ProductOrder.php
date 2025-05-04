<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductOrder extends Model
{
    protected $table = 'product_order';

    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'quantity',
        'subtotal',
        'observations',
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
