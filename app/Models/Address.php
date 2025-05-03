<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'nickname',
        'client_id',
        'state',
        'city',
        'street',
        'neighborhood',
        'cep',
        'number',
        'complement',
        'reference_point',
        'is_main_address',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::updating(function ($address) {
            if ($address->is_main_address) {
                $address::where('client_id', $address->client_id)
                    ->where('id', '!=', $address->id)
                    ->update(['is_main_address' => false]);
            }
        });

        static::deleting(function ($address) {
            if ($address->is_main_address) {
                $otherAddress = Address::where('client_id', $address->client_id)
                    ->where('id', '!=', $address->id)
                    ->first();

                if ($otherAddress) {
                    $otherAddress->is_main_address = true;
                    $otherAddress->save();
                } else {
                    // dont allow to delete
                    throw new \Exception('Não foi possível deletar');
                }
            }
        });
    }
}
