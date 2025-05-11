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

    protected $float_numbers = [
        'price',
        'discount',
        'quantity',
    ];

    public function setAttribute($key, $value)
    {
        // Float numbers
        $new_value = $value;
        if (in_array($key, $this->float_numbers) && $value) {
            if (empty($value)) {
                $new_value = $value;
            } elseif (is_numeric($value)) {
                $new_value = $this->attributes[$key] = (float)$value;
            } else {
                $value = str_replace('.', '', $value);
                $new_value = $this->attributes[$key] = (float)str_replace(',', '.', $value);
            }
        }
        return parent::setAttribute($key, $new_value);
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
