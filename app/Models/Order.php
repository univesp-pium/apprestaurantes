<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'client_id',
        'discount',
        'total',
        'total_with_discount',
        'is_open',
    ];

    // Relationships
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot([
            'id',
            'product_id',
            'order_id',
            'price',
            'discount',
            'quantity',
            'subtotal',
            'observations',
        ]);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
