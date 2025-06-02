<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'name',
        'active',
    ];

    //Relationships

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
