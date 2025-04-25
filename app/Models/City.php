<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'slug',
        'state_id',
    ];

    // Relationships
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
