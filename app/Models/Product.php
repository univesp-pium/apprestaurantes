<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'unity_id',
        'title',
        'description',
        'price',
        'quantity',
        'discount',
        'is_addicional',
        'active',
    ];

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setPriceAttribute($value)
    {
        $value = str_replace('.', '', $value);
        $this->attributes['price'] = str_replace(',', '.', $value);
    }

    public function getDiscountAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setDiscountAttribute($value)
    {
        $value = str_replace('.', '', $value);
        $this->attributes['discount'] = str_replace(',', '.', $value);
    }

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function additionals()
    {
        return $this->hasMany(Additional::class);
    }
}
