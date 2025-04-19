<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'cover',
        'order',
        'url',
        'active',
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
