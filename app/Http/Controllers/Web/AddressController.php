<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\AddressRequest;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::where('client_id', Auth::guard('client')->user()->id)->paginate(15);
        return view('web.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request)
    {
        $errors = [];
        $data = $request->all();
        $data['client_id'] = Auth::guard('client')->user()->id;

        try {
            Address::create($data);
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro criado com sucesso!');
            return redirect()->route('client-area.addresses.index');
        } else {
            sweetalert()->error('Não foi possível criar o registro!');
            return redirect()->route('client-area.addresses.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        $address = Address::find($address->id);

        if (!$address) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('client-area.addresses.index');
        }

        return view('web.addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, Address $address)
    {
        $errors = [];
        $data = $request->all();

        try {
            $address->update($data);
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
    public function destroy(Address $address)
    {
        $errors = [];
        $address = Address::find($address->id);

        if (!$address) {
            sweetalert()->error('Registro não encontrado!');
            return redirect()->route('client-area.addresses.index');
        }

        try {
            $address->delete();
        } catch (\Throwable $th) {
            $errors[] = $th->getMessage();
        }

        if (count($errors) == 0) {
            sweetalert()->success('Registro excluído com sucesso!');
            return redirect()->route('client-area.addresses.index');
        } else {
            sweetalert()->error('Não foi possível excluir o registro!');
            return redirect()->route('client-area.addresses.index');
        }
    }
}
