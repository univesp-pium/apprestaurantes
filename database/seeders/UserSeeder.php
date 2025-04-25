<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'teste@teste.com',
            'name' => 'Admin teste',
            'password' => '123123123',
        ]);
    }
}
