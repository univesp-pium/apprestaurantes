<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'client_id',
        'total',
        'is_open',
        'is_finished',
    ];

    // Relationships
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot([
            'product_id',
            'order_id',
            'quantity',
            'price',
            'discount',
            'subtotal',
            'observations',
        ]);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class)->withPivot([
            'status_id',
            'order_id',
            'user_id',
            'observation',
        ]);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
