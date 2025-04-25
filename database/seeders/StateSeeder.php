<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            [
                'name' => 'Acre',
                'slug' => 'acre',
                'uf' => 'AC',
            ],
            [
                'name' => 'Alagoas',
                'slug' => 'alagoas',
                'uf' => 'AL',
            ],
            [
                'name' => 'Amapá',
                'slug' => 'amapa',
                'uf' => 'AP',
            ],
            [
                'name' => 'Amazonas',
                'slug' => 'amazonas',
                'uf' => 'AM',
            ],
            [
                'name' => 'Bahia',
                'slug' => 'bahia',
                'uf' => 'BA',
            ],
            [
                'name' => 'Ceará',
                'slug' => 'ceara',
                'uf' => 'CE',
            ],
            [
                'name' => 'Distrito Federal',
                'slug' => 'distrito-federal',
                'uf' => 'DF',
            ],
            [
                'name' => 'Espírito Santo',
                'slug' => 'espirito-santo',
                'uf' => 'ES',
            ],
            [
                'name' => 'Goiás',
                'slug' => 'goias',
                'uf' => 'GO',
            ],
            [
                'name' => 'Maranhão',
                'slug' => 'maranhao',
                'uf' => 'MA',
            ],
            [
                'name' => 'Mato Grosso',
                'slug' => 'mato-grosso',
                'uf' => 'MT',
            ],
            [
                'name' => 'Mato Grosso do Sul',
                'slug' => 'mato-grosso-do-sul',
                'uf' => 'MS',
            ],
            [
                'name' => 'Minas Gerais',
                'slug' => 'minas-gerais',
                'uf' => 'MG',
            ],
            [
                'name' => 'Pará',
                'slug' => 'para',
                'uf' => 'PA',
            ],
            [
                'name' => 'Paraíba',
                'slug' => 'paraiba',
                'uf' => 'PB',
            ],
            [
                'name' => 'Paraná',
                'slug' => 'parana',
                'uf' => 'PR',
            ],
            [
                'name' => 'Pernambuco',
                'slug' => 'pernambuco',
                'uf' => 'PE',
            ],
            [
                'name' => 'Piauí',
                'slug' => 'piaui',
                'uf' => 'PI',
            ],
            [
                'name' => 'Rio de Janeiro',
                'slug' => 'rio-de-janeiro',
                'uf' => 'RJ',
            ],
            [
                'name' => 'Rio Grande do Norte',
                'slug' => 'rio-grande-do-norte',
                'uf' => 'RN',
            ],
            [
                'name' => 'Rio Grande do Sul',
                'slug' => 'rio-grande-do-sul',
                'uf' => 'RS',
            ],
            [
                'name' => 'Rondônia',
                'slug' => 'rondonia',
                'uf' => 'RO',
            ],
            [
                'name' => 'Roraima',
                'slug' => 'roraima',
                'uf' => 'RR',
            ],
            [
                'name' => 'Santa Catarina',
                'slug' => 'santa-catarina',
                'uf' => 'SC',
            ],
            [
                'name' => 'São Paulo',
                'slug' => 'sao-paulo',
                'uf' => 'SP',
            ],
            [
                'name' => 'Sergipe',
                'slug' => 'sergipe',
                'uf' => 'SE',
            ],
            [
                'name' => 'Tocantins',
                'slug' => 'tocantins',
                'uf' => 'TO',
            ],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
