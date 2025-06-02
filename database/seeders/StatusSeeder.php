<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            'Pedido Cadastrado',
            'Pedido Revisado',
            'Pedido em Produção',
            'Pedido Saiu para Entrega',
            'Pedido Entregue',
        ];

        foreach ($status as $sta) {
            if (!Status::where('name', $sta)->first()) {
                Status::create([
                    'name' => $sta
                ]);
            }
        }
    }
}
