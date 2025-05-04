<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'unit_id',
        'title',
        'slug',
        'description',
        'price',
        'quantity',
        'discount',
        'is_addicional',
        'active',
    ];

    //TODO
    public function getPriceFloat() {
        return $this->attributes['price'];
    }
    //TODO
    public function getDiscountFloat() {
        return $this->attributes['discount'];
    }

    public function getPriceWithDiscount() {
        return $this->getPriceFloat() - $this->getDiscountFloat();
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setPriceAttribute($value)
    {
        if (empty($value))
            return;
        $value = str_replace('.', '', $value);
        $this->attributes['price'] = str_replace(',', '.', $value);
    }

    public function getDiscountAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setDiscountAttribute($value)
    {
        if (empty($value))
            return;
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

    public function instructions()
    {
        return $this->belongsToMany(Instruction::class, 'product_instructions');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'product_recipes');
    }

    public function additionals()
    {
        return $this->hasMany(Additional::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->title);
        });

        static::deleting(function ($product) {
            foreach ($product->images as $image) {
                if (Storage::disk('public')->exists($image->image)) {
                    Storage::disk('public')->delete($image->image);
                }
                $image->delete();
            }
        });
    }
}
