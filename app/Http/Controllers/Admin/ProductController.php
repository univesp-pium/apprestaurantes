<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Instruction;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('active', true)->get();
        $units = Unit::where('active', true)->get();

        return view('admin.products.create', compact('categories', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $errors = [];
        $data = $request->all();

        try {
            Product::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('admin.products.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('admin.products.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        $categories = Category::where('active', true)->get();
        $units = Unit::where('active', true)->get();
        $instructions = Instruction::where('active', true)->get();
        $recipes = Recipe::where('active', true)->get();

        if (!$product) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.products.index');
        }

        return view('admin.products.edit', compact('product', 'categories', 'units', 'instructions', 'recipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $errors = [];
        $data = $request->all();

        try {
            $product->update($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro atualizado com sucesso!');
            return redirect()->back();
        } else {
            sweetalert()->error('Não foi possível atualizar o registro!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $errors = [];
        $product = Product::find($product->id);

        if (!$product) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.products.index');
        }

        try {
            $product->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('admin.products.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('admin.products.index');
        }
    }

    public function update_instructions(Request $request, Product $product)
    {
        $errors = [];
        $data = $request->all();

        try {
            if (empty($data['instructions'])) {
                $product->instructions()->sync([]);
            } else {
                $product->instructions()->sync($data['instructions']);
            }
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }


        if (count($errors) == 0) {
            sweetalert()->success('Registro atualizado com sucesso!');
            return redirect()->back();
        } else {
            sweetalert()->error('Não foi possível atualizar o registro!');
            return redirect()->back();
        }
    }

    public function update_recipes(Request $request, Product $product)
    {
        $errors = [];
        $data = $request->all();

        try {
            if (empty($data['recipes'])) {
                $product->recipes()->sync([]);
            } else {
                $product->recipes()->sync($data['recipes']);
            }
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro atualizado com sucesso!');
            return redirect()->back();
        } else {
            sweetalert()->error('Não foi possível atualizar o registro!');
            return redirect()->back();
        }
    }
}
