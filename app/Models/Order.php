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
        'is_open',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
