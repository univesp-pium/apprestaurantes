<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $table = 'instructions';

    protected $fillable = [
        'name',
        'active'
    ];
}
