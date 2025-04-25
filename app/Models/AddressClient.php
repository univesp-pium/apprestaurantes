<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AddressClient extends Pivot
{
    protected $table = 'address_client';

    protected $fillable = [
        'client_id',
        'address_id',
        'default',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
};
