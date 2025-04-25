<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'email'         => 'teste@teste.com',
            'name'          => 'Cliente de teste',
            'password'      => '123123123',
            'phone'         => '(15) 98888-8888',
            'address_id'    => Address::first()->id
        ]);
    }
}
