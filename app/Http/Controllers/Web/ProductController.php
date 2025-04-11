<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Miolo do sete',
                'description' => 'Descrição detalhada do produto. Carne premium selecionada',
                'image' => 'miolo-do-sete.webp',
                'price' => 19.90
            ],
            [
                'name' => 'Picanha',
                'description' => 'A mais nobre e saborosa carne brasileira. Corte especial com capa de gordura que garante suculência.',
                'image' => 'picanha.webp',
                'price' => 45.90
            ],
            [
                'name' => 'Contra File',
                'description' => 'Corte magro e macio, perfeito para bifes. Rico em proteínas e com baixo teor de gordura.',
                'image' => 'contra-file.webp',
                'price' => 42.90
            ],
            [
                'name' => 'Carne moída',
                'description' => 'Moida na hora a partir de cortes selecionados. Perfeita para hambúrgueres, molhos e recheios.',
                'image' => 'carne-moida.webp',
                'price' => 30.90
            ]
        ];

        return view('web.products.index', compact('products'));
    }

    public function show($product_slug)
    {

        $product = [
            'name' => 'Carne moída',
            'description' => 'Moida na hora a partir de cortes selecionados. Perfeita para hambúrgueres, molhos e recheios.',
            'image' => 'carne-moida.webp',
            'price' => 30.90
        ];

        return view('web.products.show', compact('product'));
    }
}
