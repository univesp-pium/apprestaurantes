<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::paginate(15);
        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {
        $errors = [];
        $data = $request->all();

        try {
            Recipe::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('admin.recipes.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('admin.recipes.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);

        if (!$recipe) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.recipes.index');
        }

        return view('admin.recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeRequest $request, Recipe $recipe)
    {
        $errors = [];
        $data = $request->all();

        try {
            $recipe->update($data);
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
    public function destroy(Recipe $recipe)
    {
        $errors = [];
        $recipe = Recipe::find($recipe->id);

        if (!$recipe) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.recipes.index');
        }

        try {
            $recipe->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('admin.recipes.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('admin.recipes.index');
        }
    }
}

