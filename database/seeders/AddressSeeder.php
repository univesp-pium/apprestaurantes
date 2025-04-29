<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\Client;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'client_id'         => Client::first()->id,
            'nickname'          => 'Minha casa',
            'state'             => 'São Paulo',
            'city'              => 'Sorocaba',
            'street'            => 'Rua exemplo',
            'neighborhood'      => 'Bairro exemplo',
            'cep'               => '18000-999',
            'number'            => '999',
            'complement'        => 'Complemento',
            'observation'       => 'Observação',
            'is_main_address'   => true,
        ]);
    }
}
