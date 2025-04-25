<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'city_id',
        'street',
        'neighborhood',
        'zip_code',
        'number',
        'complement',
        'observation',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function clients()
    {
        return $this->belongsToMany(User::class);
    }
}
