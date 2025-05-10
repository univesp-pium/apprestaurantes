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
        return $this->belongsToMany(Product::class);
    }
}
