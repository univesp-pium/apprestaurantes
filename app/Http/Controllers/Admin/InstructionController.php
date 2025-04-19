<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InstructionRequest;
use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructions = Instruction::paginate(15);
        return view('admin.instructions.index', compact('instructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instructions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstructionRequest $request)
    {
        $errors = [];
        $data = $request->all();

        try {
            Instruction::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('admin.instructions.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('admin.instructions.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruction $instruction)
    {
        $instruction = Instruction::find($instruction->id);

        if (!$instruction) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.instructions.index');
        }

        return view('admin.instructions.edit', compact('instruction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstructionRequest $request, Instruction $instruction)
    {
        $errors = [];
        $data = $request->all();

        try {
            $instruction->update($data);
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
    public function destroy(Instruction $instruction)
    {
        $errors = [];
        $instruction = Instruction::find($instruction->id);

        if (!$instruction) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('admin.instructions.index');
        }

        try {
            $instruction->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('admin.instructions.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('admin.instructions.index');
        }
    }
}

