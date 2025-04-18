<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UnitRequest;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::paginate(15);
        return view('admin.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
        $errors = [];
        $data = $request->all();

        try {
            Unit::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('admin.units.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('admin.units.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        $unit = Unit::find($unit->id);

        if (!$unit) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.units.index');
        }

        return view('admin.units.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        $errors = [];
        $data = $request->all();

        try {
            $unit->update($data);
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
    public function destroy(Unit $unit)
    {
        $errors = [];
        $unit = Unit::find($unit->id);

        if (!$unit) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.units.index');
        }

        try {
            $unit->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('admin.units.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('admin.units.index');
        }
    }
}
