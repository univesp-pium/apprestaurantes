<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'city_id'       => City::first()->id,
            'street'        => 'Rua exemplo',
            'neighborhood'  => 'Bairro exemplo',
            'zip_code'      => '18000-999',
            'number'        => '999',
            'complement'    => 'Complemento',
            'observation'   => 'Observação',
        ]);
    }
}
