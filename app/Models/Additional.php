<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $table = 'additionals';

    protected $fillable = [
        'product_id',
        'related_to_id',
    ];
}
