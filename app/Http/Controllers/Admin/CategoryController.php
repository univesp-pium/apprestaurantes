<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $errors = [];
        $data = $request->all();

        try {
            Category::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('admin.categories.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('admin.categories.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);

        if (!$category) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.categories.index');
        }

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $errors = [];
        $data = $request->all();

        try {
            $category->update($data);
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
    public function destroy(Category $category)
    {
        $errors = [];
        $category = Category::find($category->id);

        if (!$category) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.categories.index');
        }

        try {
            $category->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('admin.categories.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('admin.categories.index');
        }
    }
}
