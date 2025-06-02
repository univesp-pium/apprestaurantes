<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $table = 'order_product';

    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'discount',
        'quantity',
        'subtotal',
        'observations',
    ];

    // Custom

    public function setQuantityAttribute($value)
    {
        if (empty($value))
            return;

        if (is_numeric($value))
            return $this->attributes['quantity'] = (float)$value;

        $value = str_replace('.', '', $value);
        $this->attributes['quantity'] = (float)str_replace(',', '.', $value);
    }

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
