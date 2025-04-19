<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = [
        'name',
        'abbreviation',
        'step',
        'active',
    ];

    // Relationships
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
