<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderStatus extends Pivot
{
    protected $table = 'order_status';

    protected $fillable = [
        'status_id',
        'order_id',
        'user_id',
        'observation',
    ];
}
